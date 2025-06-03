import { useEffect, useState } from 'react';

interface CreateCompanyProps {
  isOpen: boolean;
  onClose: () => void;
  onSubmit: (formData: any) => Promise<void>;
  isSubmitting?: boolean;
}

const COMPANY_TYPES = [
  'Sole Proprietorship',
  'Partnership',
  'Corporation',
  'Cooperative',
  'Office',
  'Others',
];

const addressRegex = /^[a-zA-Z0-9\s.,\-#()]+$/u;

const CreateCompany: React.FC<CreateCompanyProps> = ({
  isOpen,
  onClose,
  onSubmit,
  isSubmitting = false,
}) => {
  const [formData, setFormData] = useState({
    name: '',
    type: '',
    address: '',
    contact_number: '',
  });
  const [error, setError] = useState('');

  useEffect(() => {
    if (isOpen) {
      setFormData({
        name: '',
        type: '',
        address: '',
        contact_number: '',
      });
      setError('');
    }
  }, [isOpen]);

  if (!isOpen) return null;

  const validate = () => {  // aside from the disabling of button. Use this validations to shows the users. If there is a problem on there inputs
    if (!formData.name.trim()) return 'Company name is required.';
    if (formData.name.length < 2) return 'Company name must be at least 2 characters.';
    if (formData.name.length > 100) return 'Company name must not exceed 100 characters.';

    if (!formData.type) return 'Company type is required.';

    if (!formData.address.trim()) return 'Address is required.';
    if (formData.address.length < 10) return 'Address must be at least 10 characters.';
    if (formData.address.length > 255) return 'Address must not exceed 255 characters.';
    if (!addressRegex.test(formData.address))
      return 'Address contains invalid characters. Only letters, numbers, spaces, and . , - # ( ) are allowed.';

    const contact = formData.contact_number.trim();
    if (!contact) return 'Contact number is required.';
    if (
      !(
        (contact.startsWith('09') && contact.length === 11) ||
        (contact.startsWith('+63') && contact.length === 13)
      )
    ) {
      return 'Contact number must start with "09" (11 digits) or "+63" (13 characters).';
    }
    if (contact.startsWith('09') && !/^\d{11}$/.test(contact)) {
      return 'Contact number must be 11 digits if starting with "09".';
    }
    if (contact.startsWith('+63') && !/^\+63\d{10}$/.test(contact)) {
      return 'Contact number must be in the format +63XXXXXXXXXX.';
    }

    return '';
  };

  const isFormValid = () => {
    return (
      formData.name.trim().length >= 2 &&
      formData.name.trim().length <= 100 &&
      !!formData.type &&
      formData.address.trim().length >= 10 &&
      formData.address.trim().length <= 255 &&
      addressRegex.test(formData.address) &&
      (
        (formData.contact_number.startsWith('09') && /^\d{11}$/.test(formData.contact_number))
      )
    );
  };

  const handleChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement | HTMLTextAreaElement>
  ) => {
    setFormData((prev) => ({ ...prev, [e.target.name]: e.target.value }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    const validationError = validate();
    if (validationError) {
      setError(validationError);
      return;
    }
    setError('');
    try {
      await onSubmit(formData);
      onClose();
    } catch (err: any) {
      setError('Failed to create company. Please try again.');
    }
  };

  return (
    <div className="fixed inset-0 bg-black/50 flex justify-center items-center z-[1025]">
      <div className="bg-white rounded-lg shadow-lg w-96 p-8">
        <h3 className="text-2xl font-semibold text-gray-800 mb-4">Create New Company</h3>
        {error && <p className="text-red-500 text-sm mb-4">{error}</p>}
        <form onSubmit={handleSubmit} className="space-y-5 text-sm">
          <div>
            <label className="block text-gray-700 mb-1">Company Name</label>
            <input
              type="text"
              name="name"
              value={formData.name}
              onChange={handleChange}
              required
              minLength={2}
              maxLength={100}
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
              placeholder="Enter company name"
            />
          </div>
          <div>
            <label className="block text-gray-700 mb-1">Type</label>
            <select
              name="type"
              value={formData.type}
              onChange={handleChange}
              required
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
            >
              <option value="">Select type</option>
              {COMPANY_TYPES.map((type) => (
                <option key={type} value={type}>{type}</option>
              ))}
            </select>
          </div>
          <div>
            <label className="block text-gray-700 mb-1">Address</label>
            <textarea
              name="address"
              value={formData.address}
              onChange={handleChange}
              required
              minLength={10}
              maxLength={255}
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 resize-none"
              placeholder="Enter address"
              rows={2}
            />
          </div>
          <div>
            <label className="block text-gray-700 mb-1">Contact Number</label>
            <input
              type="text"
              name="contact_number"
              value={formData.contact_number}
              onChange={handleChange}
              required
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
              placeholder='09123456789'
              maxLength={11}
            />
          </div>
          <div className="flex justify-end space-x-2 pt-2">
            <button
              type="button"
              onClick={onClose}
              className="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 hover:cursor-pointer"
            >
              Cancel
            </button>
            <button
              type="submit"
              disabled={isSubmitting || !isFormValid()}
              className="px-4 py-2 rounded-lg bg-teal-600 text-white hover:bg-teal-700 disabled:opacity-60 disabled:cursor-not-allowed hover:cursor-pointer"
            >
              {isSubmitting ? 'Creating...' : 'Create'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default CreateCompany;