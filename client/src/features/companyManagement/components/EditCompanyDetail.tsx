import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";
import {
  fetchCompanyDetails,
  updateCompanyDetails,
} from "../hooks/useEditCompany";

interface CompanyDetails {
  id: string;
  name: string;
  type: string;
  address: string;
  contact_number: string;
}

const EditCompanyDetail: React.FC = () => {
  const { id } = useParams<{ id: string }>();
  const [company, setCompany] = useState<CompanyDetails | null>(null);
  const [isEditing, setIsEditing] = useState(false);
  const [formData, setFormData] = useState<Omit<CompanyDetails, "id">>({
    name: "",
    type: "",
    address: "",
    contact_number: "",
  });
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [isSubmitting, setIsSubmitting] = useState(false);

  useEffect(() => {
    const getCompanyDetails = async () => {
      try {
        setLoading(true);
        const data = await fetchCompanyDetails(id!);
        setCompany(data);
        setFormData({
          name: data.name,
          type: data.type,
          address: data.address,
          contact_number: data.contact_number,
        });
      } catch (err) {
        setError("Failed to load company details");
        console.error(err);
      } finally {
        setLoading(false);
      }
    };

    getCompanyDetails();
  }, [id]);

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const { name, value } = e.target;
    setFormData((prev) => ({ ...prev, [name]: value }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setError(null);
    setIsSubmitting(true);

    try {
      const updatedCompany = await updateCompanyDetails(id!, formData);
      setCompany(updatedCompany);
      setIsEditing(false);
    } catch (err) {
      setError("Failed to update company details. Please try again.");
      console.error("Update error:", err);

      if (axios.isAxiosError(err)) {
        if (err.response?.status === 401) {
          setError("Unauthorized - Please login again");
        } else if (err.response?.data?.message) {
          setError(err.response.data.message);
        }
      }
    } finally {
      setIsSubmitting(false);
    }
  };

  if (loading) return <div>Loading company details...</div>;
  if (error) return <div className="text-red-500">{error}</div>;
  if (!company) return <div>No company data found</div>;

  return (
    <div className="bg-white p-6 rounded-lg shadow mb-6">
      {isEditing ? (
        <form onSubmit={handleSubmit}>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 pb-20">
            <div>
              <label className="block text-gray-600 mb-1">Company Name</label>
              <input
                type="text"
                name="name"
                value={formData.name}
                onChange={handleInputChange}
                className="w-full p-2 border border-gray-100 bg-gray-100 text-gray-600 rounded"
                required
              />

              <label className="block text-gray-600 mt-4 mb-1">
                Company Type
              </label>
              <input
                type="text"
                name="type"
                value={formData.type}
                onChange={handleInputChange}
                className="w-full p-2 border border-gray-100 bg-gray-100 text-gray-600 rounded"
                required
              />
            </div>

            <div>
              <label className="block text-gray-600 mb-1">
                Company Address
              </label>
              <input
                type="text"
                name="address"
                value={formData.address}
                onChange={handleInputChange}
                className="w-full p-2 border border-gray-100 bg-gray-100 text-gray-600 rounded"
                required
              />

              <label className="block text-gray-600 mt-4 mb-1">
                Company Number
              </label>
              <input
                type="text"
                name="contact_number"
                value={formData.contact_number}
                onChange={handleInputChange}
                className="w-full p-2 border border-gray-100 bg-gray-100 text-gray-600 rounded"
                required
              />
            </div>
          </div>
          <div className="flex justify-end space-x-5">
            <button
              type="button"
              onClick={() => setIsEditing(false)}
              className="px-6 py-1 bg-gray-100 border-teal-500 border rounded hover:bg-gray-300"
              disabled={isSubmitting}
            >
              Cancel
            </button>
            <button
              type="submit"
              className="px-6 py-1 bg-teal-500 text-white rounded hover:bg-teal-600"
              disabled={isSubmitting}
            >
              {isSubmitting ? "Saving..." : "Save"}
            </button>
          </div>
        </form>
      ) : (
        <>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <h3 className="font-medium text-gray-600">Company Name</h3>
              <p className="text-gray-800">{company.name}</p>

              <h3 className="font-medium text-gray-600 mt-4">Company Type</h3>
              <p className="text-gray-800">{company.type}</p>
            </div>

            <div>
              <h3 className="font-medium text-gray-600">Company Address</h3>
              <p className="text-gray-800">{company.address}</p>

              <h3 className="font-medium text-gray-600 mt-4">Company Number</h3>
              <p className="text-gray-800">{company.contact_number}</p>
            </div>
          </div>
          <div className="flex justify-end">
            <button
              onClick={() => setIsEditing(true)}
              className="px-4 py-2 bg-teal-500 text-white rounded hover:bg-blue-600"
            >
              Edit Company Details
            </button>
          </div>
        </>
      )}
    </div>
  );
};

export default EditCompanyDetail;
