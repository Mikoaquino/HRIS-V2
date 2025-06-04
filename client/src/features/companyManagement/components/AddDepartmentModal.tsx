import React, { useState, useEffect } from "react";

import axios from "axios";
import { createDepartment, updateDepartment } from "../hooks/useEditCompany";
interface Department {
  id: string;
  name: string;
  description: string;
  member_count: number;
}
interface AddDepartmentModalProps {
  isOpen: boolean;
  onClose: () => void;
  companyId: string;
  onSuccess: (newDept: any) => void;
  department?: Department | null;
  onUpdate?: (updatedDept: any) => void;
}

const AddDepartmentModal: React.FC<AddDepartmentModalProps> = ({
  isOpen,
  onClose,
  companyId,
  onSuccess,
  department,
  onUpdate,
}) => {
  const [formData, setFormData] = useState({
    name: department?.name || "",
    description: department?.description || "",
  });
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [error, setError] = useState<string | null>(null);
  useEffect(() => {
    if (department) {
      setFormData({
        name: department.name,
        description: department.description,
      });
    } else {
      setFormData({
        name: "",
        description: "",
      });
    }
  }, [department]);

  const handleInputChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>
  ) => {
    const { name, value } = e.target;
    setFormData((prev) => ({ ...prev, [name]: value }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitting(true);
    setError(null);

    try {
      if (department) {
        // Update existing department
        const updatedDept = await updateDepartment(department.id, {
          ...formData,
          company_id: companyId,
        });
        if (onUpdate) onUpdate(updatedDept);
      } else {
        // Create new department
        const newDepartment = await createDepartment({
          ...formData,
          company_id: companyId,
        });
        onSuccess(newDepartment);
      }
      onClose();
    } catch (err) {
      setError(
        department
          ? "Failed to update department. Please try again."
          : "Failed to add department. Please try again."
      );
      console.error(err);
    } finally {
      setIsSubmitting(false);
    }
  };

  if (!isOpen) return null;

  return (
    <div className="fixed inset-0 bg-black/50 flex items-center justify-center p-4 z-[9999]">
      <div className="bg-white rounded-lg p-6 w-full max-w-md">
        <div className="flex justify-center items-center mb-4 text-center">
          <span className="text-sm font-bold ">
            {department ? "Edit Department" : "ADD DEPARTMENT"}
          </span>
        </div>

        {error && (
          <div className="mb-4 p-2 bg-red-100 text-red-700 rounded">
            {error}
          </div>
        )}

        <form onSubmit={handleSubmit}>
          <div className="mb-4">
            <label className="block text-gray-600 mb-1">
              Department Name *
            </label>
            <input
              type="text"
              name="name"
              value={formData.name}
              onChange={handleInputChange}
              className="w-full p-2 border border-gray-300 rounded"
              required
            />
          </div>

          <div className="mb-4">
            <label className="block text-gray-600 mb-1">Description *</label>
            <textarea
              name="description"
              value={formData.description}
              onChange={handleInputChange}
              className="w-full p-2 border border-gray-300 rounded"
              rows={3}
              required
            />
          </div>

          <div className="flex justify-end space-x-2">
            <button
              type="button"
              onClick={onClose}
              className="px-4 py-2 bg-gray-100 text-gray-500 border-gray-300 border-1 rounded hover:bg-gray-300 transition"
              disabled={isSubmitting}
            >
              Cancel
            </button>
            <button
              type="submit"
              className="px-4 py-2 bg-teal-500 text-white rounded hover:bg-teal-600 transition"
              disabled={isSubmitting}
            >
              {isSubmitting
                ? department
                  ? "Updating..."
                  : "Adding..."
                : department
                ? "Update Department"
                : "Save"}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default AddDepartmentModal;
