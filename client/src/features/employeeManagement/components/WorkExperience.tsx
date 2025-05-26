import React, { useState, useEffect } from 'react';
import { Pencil, Trash, XCircle } from 'lucide-react';

type Work = {
  employer: string;
  position: string;
  from: string;
  to: string;
  reason: string;
  isEditing?: boolean;
};

const reasonRegex = /^[A-Za-z0-9 .,\-'"()]{0,200}$/;
const employerRegex = /^[A-Za-z .,\-'"&()]{3,100}$/;
const positionRegex = /^[A-Za-z .,\-'"()]{2,100}$/;
const currentMonth = new Date().toISOString().slice(0, 7);
const minMonth = '1950-01';
const token = sessionStorage.getItem('token');
const WORK_STORAGE_KEY = token ? `hris-work-experience-${token}` : 'hris-work-experience';

const isValidYearRange = (from: string, to: string) => {
  if (!from || !to) return false;
  if (from < minMonth || from > currentMonth) return false;
  return to >= from && to <= currentMonth;
};

const WorkExperience: React.FC = () => {
  const [works, setWorks] = useState<Work[]>(() => {
    const stored = sessionStorage.getItem(WORK_STORAGE_KEY);
    if (stored) {
      try {
        return JSON.parse(stored);
      } catch {
        // fallback
      }
    }
    return [{
      employer: '',
      position: '',
      from: '',
      to: '',
      reason: '',
      isEditing: true,
    }];
  });

  const [originalWork, setOriginalWork] = useState<{ [key: number]: Work }>({});
  const [showDeleteModal, setShowDeleteModal] = useState(false);
  const [deleteIndex, setDeleteIndex] = useState<number | null>(null);
  const [isDeleting, setIsDeleting] = useState(false);

  useEffect(() => {
    sessionStorage.setItem(WORK_STORAGE_KEY, JSON.stringify(works));
  }, [works, WORK_STORAGE_KEY]);

  useEffect(() => {
    // Remove all hris-work-experience-* keys except the current one
    Object.keys(sessionStorage).forEach((key) => {
      if (key.startsWith('hris-work-experience-') && key !== WORK_STORAGE_KEY) {
        sessionStorage.removeItem(key);
      }
    });
  }, [token]);

  const handleChange = (
    index: number,
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>
  ) => {
    const { name, value } = e.target;
    const newWorks = [...works];
    newWorks[index] = { ...newWorks[index], [name]: value };
    setWorks(newWorks);
  };

  const saveWork = (index: number) => {
    const work = works[index];
    const isValid =
      employerRegex.test(work.employer) &&
      positionRegex.test(work.position) &&
      reasonRegex.test(work.reason) &&
      work.from &&
      work.to &&
      isValidYearRange(work.from, work.to);

    if (isValid) {
      const updated = [...works];
      updated[index].isEditing = false;
      setWorks(updated);
    } else {
      alert('Please fill out all fields correctly before saving.');
    }
  };

  const cancelWork = (index: number) => {
    if (!originalWork.hasOwnProperty(index)) {
      if (works.length > 1) {
        const newWorks = works.filter((_, i) => i !== index);
        setWorks(newWorks);
      } else {
        setWorks([
          {
            employer: '',
            position: '',
            from: '',
            to: '',
            reason: '',
            isEditing: true,
          },
        ]);
      }
      return;
    }

    const reverted = [...works];
    reverted[index] = { ...originalWork[index], isEditing: false };
    setWorks(reverted);

    setOriginalWork((prev) => {
      const updated = { ...prev };
      delete updated[index];
      return updated;
    });
  };

  const areAllWorksValid = () => {
    return works.every(
      (work) =>
        employerRegex.test(work.employer) &&
        positionRegex.test(work.position) &&
        reasonRegex.test(work.reason) &&
        work.from &&
        work.to &&
        isValidYearRange(work.from, work.to)
    );
  };

  const addWork = () => {
    const updatedWorks = works.map((work) => ({
      ...work,
      isEditing: false,
    }));

    setWorks([
      ...updatedWorks,
      {
        employer: '',
        position: '',
        from: '',
        to: '',
        reason: '',
        isEditing: true,
      },
    ]);
  };

  const removeWork = (index: number) => {
    const updated = works.filter((_, i) => i !== index);
    setWorks(updated);
  };

  const toggleEdit = (index: number) => {
    setOriginalWork((prev) => ({
      ...prev,
      [index]: { ...works[index] },
    }));
    const updated = [...works];
    updated[index].isEditing = true;
    setWorks(updated);
  };

  const formatDate = (dateString: string) => {
    if (!dateString) return '';
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
      month: 'short',
      year: 'numeric',
    });
  };

  const isWorkChanged = (index: number) => {
    if (!originalWork.hasOwnProperty(index)) return true;
    const orig = originalWork[index];
    const curr = works[index];
    return (
      orig.employer !== curr.employer ||
      orig.position !== curr.position ||
      orig.from !== curr.from ||
      orig.to !== curr.to ||
      orig.reason !== curr.reason
    );
  };

  //sessionStorage.removeItem(WORK_STORAGE_KEY); Paki add nalang to sa API POST mo pre @peter

  return (
    <div className="space-y-6 bg-white p-8 rounded-md shadow-sm">
      {works.map((work, index) => (
        <div key={index} className="border-b-3 border-gray-200 relative">
          {/* Summary to */}
          {!work.isEditing && (
            <div className="flex flex-col">
              <div className="px-2 md:px-5 pb-6 pt-2">
                <div className="flex flex-col md:flex-row md:justify-between md:items-start md:space-x-8 space-y-4 md:space-y-0">
                  <div className="text-sm text-gray-500 min-w-[100px] md:min-w-[120px] pt-2 md:pt-8">
                    {formatDate(work.from)} - {formatDate(work.to)}
                  </div>
                  <div className="flex-1 flex-col md:pt-2 md:ps-16">
                    <h3 className="text-base font-semibold text-gray-900">
                      {work.position}
                    </h3>
                    <p className="text-sm font-medium text-gray-700">{work.employer}</p>
                  </div>

                  <div className="flex-1 space-x-2 md:space-x-4 pt-2 md:pt-6 justify-end">
                    {works.length > 1 && (
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

          {/* Working krazy Form */}
          {work.isEditing && (
            <div className="p-4">
              <div className="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-5">
                {/* Previous Employer */}
                <div className="flex flex-col">
                  <label className="text-sm font-medium text-gray-700 mb-1">
                    Previous Employer <span className="text-red-500">*</span>
                  </label>
                  <input
                    type="text"
                    name="employer"
                    placeholder="Enter Previous Employer"
                    value={work.employer}
                    onChange={(e) => handleChange(index, e)}
                    className="shadow border-gray-300 rounded px-3 py-2 text-sm w-full bg-gray-100 text-gray-700"
                  />
                </div>
                {/* Job Position */}
                <div className="flex flex-col">
                  <label className="text-sm font-medium text-gray-700 mb-1">
                    Job Position <span className="text-red-500">*</span>
                  </label>
                  <input
                    type="text"
                    name="position"
                    placeholder="Enter Job Position"
                    value={work.position}
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
                    value={work.from}
                    onChange={(e) => handleChange(index, e)}
                    min={minMonth}
                    max={currentMonth}
                    className="shadow border-gray-300 rounded px-3 py-2 text-sm w-full bg-gray-100 text-gray-700"
                  />
                </div>
                {/* To */}
                <div className="flex flex-col">
                  <label className="text-sm font-medium text-gray-700 mb-1">
                    To <span className="text-red-500">*</span>
                  </label>
                  <input
                    type="month"
                    name="to"
                    value={work.to}
                    onChange={(e) => handleChange(index, e)}
                    min={minMonth}
                    max={currentMonth}
                    className="shadow border-gray-300 rounded px-3 py-2 text-sm w-full bg-gray-100 text-gray-700"
                  />
                </div>
                {/* Reason for Leaving */}
                <div className="flex flex-col md:col-span-2">
                  <label className="text-sm font-medium text-gray-700 mb-1">
                    Reason For Leaving
                  </label>
                  <textarea
                    name="reason"
                    placeholder="Enter reason for leaving"
                    value={work.reason}
                    onChange={(e) => handleChange(index, e)}
                    className="shadow border-gray-300 rounded px-3 py-2 text-sm w-full bg-gray-100 text-gray-700 resize-none"
                  />
                </div>
              </div>
              {/* Cancel and Save Buttons */}
              <div className="mt-4 flex justify-end">
              {work.isEditing && index > 0 && (
                <button
                  onClick={() => cancelWork(index)}
                  className="text-sm font-medium px-4 py-2 rounded transition-colors bg-gray-200 hover:bg-gray-300 text-gray-700 mr-2 cursor-pointer"
                  type="button"
                >
                  Cancel
                </button>
              )}
              {index !== works.length - 1 && work.isEditing && (
                <button
                  onClick={() => saveWork(index)}
                  disabled={
                    !(
                      employerRegex.test(work.employer) &&
                      positionRegex.test(work.position) &&
                      reasonRegex.test(work.reason) &&
                      work.from &&
                      work.to &&
                      isValidYearRange(work.from, work.to)
                    ) || !isWorkChanged(index)
                  }
                  className={`text-sm font-medium px-4 py-2 rounded transition-colors ${
                    employerRegex.test(work.employer) &&
                    positionRegex.test(work.position) &&
                    reasonRegex.test(work.reason) &&
                    work.from &&
                    work.to &&
                    isValidYearRange(work.from, work.to) &&
                    isWorkChanged(index)
                      ? 'bg-teal-500 hover:bg-teal-600 text-white cursor-pointer'
                      : 'bg-gray-300 text-gray-600 cursor-not-allowed'
                  }`}
                  type="button"
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
              <h2 className="text-xl font-semibold text-red-600 mb-2">Delete Work Experience</h2>
              <p className="text-gray-700 mb-6">
                Are you sure you want to delete this work experience record? This process cannot be undone.
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
                      await removeWork(deleteIndex);
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
          onClick={addWork}
          disabled={!areAllWorksValid()}
          className={`text-sm font-medium px-4 py-2 rounded transition-colors ${
            areAllWorksValid()
              ? 'bg-teal-500 hover:bg-teal-600 text-white cursor-pointer'
              : 'bg-gray-300 text-gray-600 cursor-not-allowed'
          }`}
          type="button"
        >
          Add Work Experience
        </button>
    </div>
  );
};

export default WorkExperience;