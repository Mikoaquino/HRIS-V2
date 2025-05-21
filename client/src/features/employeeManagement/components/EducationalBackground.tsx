import React, { useState, useEffect } from 'react';
import { Pencil, Trash, XCircle } from 'lucide-react';

type Education = {
  attainment: string;
  school: string;
  degree: string;
  from: string;
  to: string;
  isPresent: boolean;
  isEditing?: boolean;
};

const token = sessionStorage.getItem('token');
const EDUCATION_STORAGE_KEY = token ? `hris-educational-background-${token}` : 'hris-educational-background';

const schoolRegex = /^[A-Za-z0-9 .,\-'"&()]{3,100}$/;
const degreeRegex = /^[A-Za-z .,\-'"&()]{2,100}$/;
const currentMonth = new Date().toISOString().slice(0, 7);
const minMonth = '1950-01';

const isValidYearRange = (from: string, to: string, isPresent: boolean) => {
  if (!from || (!isPresent && !to)) return false;

  const currentMonth = new Date().toISOString().slice(0, 7);
  const minMonth = '1950-01';

  if (from < minMonth || from > currentMonth) return false;

  if (isPresent) {
    return true;
  }

  return to >= from && to <= currentMonth;
};

const EducationalBackground: React.FC = () => {
  const [educations, setEducations] = useState<Education[]>(() => {
    const stored = sessionStorage.getItem(EDUCATION_STORAGE_KEY);
    if (stored) {
      try {
        return JSON.parse(stored);
      } catch {
        return [{
          attainment: '',
          school: '',
          degree: '',
          from: '',
          to: '',
          isPresent: false,
          isEditing: true,
        }];
      }
    }
    return [{
      attainment: '',
      school: '',
      degree: '',
      from: '',
      to: '',
      isPresent: false,
      isEditing: true,
    }];
  });

  const [originalEducation, setOriginalEducation] = useState<{ [key: number]: Education }>({});
  const [showDeleteModal, setShowDeleteModal] = useState(false);
  const [deleteIndex, setDeleteIndex] = useState<number | null>(null);
  const [isDeleting, setIsDeleting] = useState(false);

  useEffect(() => {
    sessionStorage.setItem(EDUCATION_STORAGE_KEY, JSON.stringify(educations));
  }, [educations, EDUCATION_STORAGE_KEY]);

  useEffect(() => {
    Object.keys(sessionStorage).forEach((key) => {
      if (key.startsWith('hris-educational-background-') && key !== EDUCATION_STORAGE_KEY) {
        sessionStorage.removeItem(key);
      }
    });
  }, [token]);

  const handleChange = (
    index: number,
    e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement>
  ) => {
    const { name, value, type, checked } = e.target as HTMLInputElement;
    const newEducations = [...educations];
    const updatedEducation = {
      ...newEducations[index],
      [name]: type === 'checkbox' ? checked : value,
      ...(name === 'isPresent' && checked ? { to: '' } : {}),
    };

    newEducations[index] = updatedEducation;
    setEducations(newEducations);
  };

  const saveEducation = (index: number) => {
    const education = educations[index];
    const isValid =
      education.attainment &&
      schoolRegex.test(education.school) &&
      degreeRegex.test(education.degree) &&
      education.from &&
      (education.isPresent || education.to) &&
      isValidYearRange(education.from, education.to, education.isPresent);

    if (isValid) {
      const updated = [...educations];
      updated[index].isEditing = false;
      setEducations(updated);
    } else {
      alert("Please fill out all fields correctly before saving.");
    }
  };

  const cancelEducation = (index: number) => {
    if (!originalEducation.hasOwnProperty(index)) {
      if (educations.length > 1) {
        const newEducations = educations.filter((_, i) => i !== index);
        setEducations(newEducations);
      } else {
        setEducations([{
          attainment: '',
          school: '',
          degree: '',
          from: '',
          to: '',
          isPresent: false,
          isEditing: true,
        }]);
      }
      return;
    }

    const reverted = [...educations];
    reverted[index] = { ...originalEducation[index], isEditing: false };
    setEducations(reverted);

    setOriginalEducation((prev) => {
      const updated = { ...prev };
      delete updated[index];
      return updated;
    });
  };

  const areAllEducationsValid = () => {
    return educations.every((edu) =>
      edu.attainment &&
      schoolRegex.test(edu.school) &&
      degreeRegex.test(edu.degree) &&
      edu.from &&
      (edu.isPresent || edu.to) &&
      isValidYearRange(edu.from, edu.to, edu.isPresent)
    );
  };

  const addEducation = () => {
    const updatedEducations = educations.map((education) => ({
      ...education,
      isEditing: false,
    }));

    setEducations([
      ...updatedEducations,
      {
        attainment: '',
        school: '',
        degree: '',
        from: '',
        to: '',
        isPresent: false,
        isEditing: true,
      },
    ]);
  };

  const removeEducation = (index: number) => {
    const updated = educations.filter((_, i) => i !== index);
    setEducations(updated);
  };

  const toggleEdit = (index: number) => {
    setOriginalEducation((prev) => ({
      ...prev,
      [index]: { ...educations[index] }
    }));
    const updated = [...educations];
    updated[index].isEditing = true;
    setEducations(updated);
  };

  const formatDate = (dateString: string) => {
    if (!dateString) return '';
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
      month: 'short',
      year: 'numeric'
    });
  };

  const isEducationChanged = (index: number) => {
    if (!originalEducation.hasOwnProperty(index)) return true;
    const orig = originalEducation[index];
    const curr = educations[index];
    return (
      orig.attainment !== curr.attainment ||
      orig.school !== curr.school ||
      orig.degree !== curr.degree ||
      orig.from !== curr.from ||
      orig.to !== curr.to ||
      orig.isPresent !== curr.isPresent
    );
  };

  //sessionStorage.removeItem(EDUCATION_STORAGE_KEY); Paki add nalang to sa API POST mo pre @peter

  return (
    <div className="space-y-6 bg-white p-8 rounded-md shadow-sm">
      {educations.map((education, index) => (
        <div
          key={index}
          className="border-b-3 border-gray-200 relative"
        >
          {/* summary cute*/}
          {!education.isEditing && (
          <div className="flex flex-col">
            <div className="px-2 md:px-5 pb-6 pt-2">
              <div className="flex flex-col md:flex-row md:justify-between md:items-start md:space-x-8 space-y-4 md:space-y-0">
                <div className="text-sm text-gray-500 min-w-[100px] md:min-w-[120px] pt-2 md:pt-8">
                  {formatDate(education.from)} - {education.isPresent ? 'Present' : formatDate(education.to)}
                </div>
                <div className="flex-1 flex-col md:pt-2 md:ps-16">
                  <h3 className="text-base font-semibold text-gray-900 mb-0.5">
                    {education.attainment} Degree
                  </h3>
                  <p className="text-sm font-medium text-gray-700 mb-0.5">{education.school}</p>
                  <p className="text-sm text-gray-500">{education.degree}</p>
                </div>
                <div className="flex-1 space-x-2 md:space-x-4 pt-2 md:pt-6 justify-end">
                  {educations.length > 1 && (
                    <button
                      onClick={() => {
                        setDeleteIndex(index);
                        setShowDeleteModal(true);
                      }}
                      className="text-gray-400 hover:text-gray-600 transition cursor-pointer"
                      type="button"
                      aria-label="Delete"
                    >
                      <Trash size={22} />
                    </button>
                  )}
                  <button
                    onClick={() => toggleEdit(index)}
                    className="text-gray-400 hover:text-gray-600 transition cursor-pointer"
                    type="button"
                    aria-label="Edit"
                  >
                    <Pencil size={22} />
                  </button>
                </div>
              </div>
            </div>
          </div>
        )}

          {/* Krazy Education form */}
          {education.isEditing && (
            <div className="p-4">
              <div className="grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-5">
                {/* Attainment */}
                <div className="flex flex-col">
                  <label className="text-sm font-medium text-gray-700 mb-1">
                    Educational Attainment <span className="text-red-500">*</span>
                  </label>
                  <select
                    name="attainment"
                    value={education.attainment}
                    onChange={(e) => handleChange(index, e)}
                    className="border-gray-300 rounded px-3 shadow py-2 text-sm w-full bg-gray-100 text-gray-500"
                  >
                    <option value="">Select Educational Attainment</option>
                    <option value="Doctorate">Doctoratal Degree</option>
                    <option value="Master's">Master's Degree</option>
                    <option value="Bachelor's">Bachelor's Degree</option>
                    <option value="Vocational">Vocational / Associate Degree</option>
                    <option value="High School">High School</option>
                  </select>
                </div>
                {/* School */}
                <div className="flex flex-col">
                  <label className="text-sm font-medium text-gray-700 mb-1">
                    School/University <span className="text-red-500">*</span>
                  </label>
                  <input
                    type="text"
                    name="school"
                    placeholder="Enter University Name"
                    value={education.school}
                    onChange={(e) => handleChange(index, e)}
                    className="shadow border-gray-300 rounded px-3 py-2 text-sm w-full bg-gray-100 text-gray-700"
                  />
                </div>
                {/* Degree */}
                <div className="flex flex-col">
                  <label className="text-sm font-medium text-gray-700 mb-1">
                    Degree/Level <span className="text-red-500">*</span>
                  </label>
                  <input
                    type="text"
                    name="degree"
                    placeholder="Enter Degree/Level"
                    value={education.degree}
                    onChange={(e) => handleChange(index, e)}
                    className="shadow border-gray-300 rounded px-3 py-2 text-sm w-full bg-gray-100 text-gray-700"
                  />
                </div>
                {/* From */}
                <div className="flex flex-col">
                  <label className="text-sm font-medium text-gray-700 mb-1">
                    From <span className="text-red-500">*</span>
                  </label>
                  <input
                    type="month"
                    name="from"
                    value={education.from}
                    onChange={(e) => handleChange(index, e)}
                    min={minMonth}
                    max={currentMonth}
                    className="shadow border-gray-300 rounded px-3 py-2 text-sm w-full bg-gray-100 text-gray-700"
                  />
                </div>
                {/* To + isPresent */}
                <div className="flex flex-col md:col-span-1">
                  <div className="flex items-center justify-start mb-1 gap-2">
                    <label className="text-sm font-medium text-gray-700">
                      To
                    </label>
                    <div className="flex items-center">
                      <input
                        type="checkbox"
                        id={`isPresent-${index}`}
                        name="isPresent"
                        checked={education.isPresent}
                        onChange={(e) => handleChange(index, e)}
                        className="mr-2"
                      />
                      <label htmlFor={`isPresent-${index}`} className="text-sm text-gray-700">
                        Present/Currently Pursuing <span className="text-red-500">*</span>
                      </label>
                    </div>
                  </div>
                  <input
                    type="month"
                    name="to"
                    value={education.to}
                    onChange={(e) => handleChange(index, e)}
                    disabled={education.isPresent}
                    min={minMonth}
                    max={currentMonth}
                    className="shadow border-gray-300 rounded px-3 py-2 text-sm w-full bg-gray-100 text-gray-700"
                  />
                </div>
              </div>

              <div className="mt-4 flex justify-end">
                {education.isEditing && index > 0 && (
                  <button
                    onClick={() => cancelEducation(index)}
                    className="text-sm font-medium px-4 py-2 rounded transition-colors bg-gray-200 hover:bg-gray-300 text-gray-700 mr-2 cursor-pointer"
                  >
                    Cancel
                  </button>
                )}
                {index !== educations.length - 1 && education.isEditing && (
                  <button
                    onClick={() => saveEducation(index)}
                    disabled={
                      !(
                        education.attainment &&
                        schoolRegex.test(education.school) &&
                        degreeRegex.test(education.degree) &&
                        education.from &&
                        (education.isPresent || education.to) &&
                        isValidYearRange(education.from, education.to, education.isPresent)
                      ) || !isEducationChanged(index)
                    }
                    className={`text-sm font-medium px-4 py-2 rounded transition-colors ${
                      (
                        education.attainment &&
                        schoolRegex.test(education.school) &&
                        degreeRegex.test(education.degree) &&
                        education.from &&
                        (education.isPresent || education.to) &&
                        isValidYearRange(education.from, education.to, education.isPresent)
                      ) && isEducationChanged(index)
                        ? 'bg-teal-500 hover:bg-teal-600 text-white cursor-pointer'
                        : 'bg-gray-300 text-gray-600 cursor-not-allowed'
                    }`}
                  >
                    Save
                  </button>
                )}
              </div>
            </div>
          )}
        </div>
      ))}

      {showDeleteModal && (
        <div className="fixed inset-0 z-[1025] flex items-center justify-center bg-black/50 bg-opacity-40">
          <div className="bg-white rounded-lg shadow-lg p-8 max-w-md w-full text-center">
            <div className="flex flex-col items-center">
              <div className="text-red-500 mb-2">
                <XCircle size={90} strokeWidth={1.5} className="mx-auto" />
              </div>
              <h2 className="text-xl font-semibold text-red-600 mb-2">Delete Educational Attainment</h2>
              <p className="text-gray-700 mb-6">
                Are you sure you want to delete this educational attainment record? This process cannot be undone.
              </p>
              <div className="flex justify-center gap-4">
                <button
                  onClick={() => setShowDeleteModal(false)}
                  className="px-4 py-2 rounded bg-gray-100 text-gray-700 hover:bg-gray-200 font-medium cursor-pointer"
                >
                  Cancel
                </button>
                <button
                  onClick={async () => {
                    if (deleteIndex !== null) {
                      setIsDeleting(true);
                      await removeEducation(deleteIndex);
                      setIsDeleting(false);
                    }
                    setShowDeleteModal(false);
                    setDeleteIndex(null);
                  }}
                  disabled={isDeleting}
                  className="px-4 py-2 rounded bg-red-500 text-white hover:bg-red-600 font-medium cursor-pointer"
                >
                  {isDeleting ? 'Deleting...' : 'Delete'}
                </button>
              </div>
            </div>
          </div>
        </div>
      )}

      <button
        onClick={addEducation}
        disabled={!areAllEducationsValid()}
        className={`text-sm font-medium px-4 py-2 rounded transition-colors ${
          areAllEducationsValid()
            ? 'bg-teal-500 hover:bg-teal-600 text-white cursor-pointer'
            : 'bg-gray-300 text-gray-600 cursor-not-allowed'
        }`}
      >
        Add Education
      </button>
    </div>
  );
};

export default EducationalBackground;