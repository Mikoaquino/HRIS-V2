import { useState, useEffect } from "react";
import useOnboarding from "../hooks/useOnboarding";
import { Document, FileUpload } from "../types/onboarding";

interface DocumentUploaderProps {
  onValidationChange?: (isValid: boolean) => void;
}

const DocumentUploader: React.FC<DocumentUploaderProps> = ({
  onValidationChange = () => {},
}) => {
  const { onboardingData, updateDocument } = useOnboarding();
  const { documents } = onboardingData;

  const [isModalOpen, setIsModalOpen] = useState(false);
  const [selectedDocument, setSelectedDocument] = useState<Document | null>(
    null
  );
  const [fileUploads, setFileUploads] = useState<FileUpload[]>([]);
  const [uploadError, setUploadError] = useState("");

  const [documentFiles, setDocumentFiles] = useState<
    Record<string, FileUpload[]>
  >({});

  const openModal = (document: Document) => {
    setSelectedDocument(document);
    setFileUploads(documentFiles[document.id] || []);
    setUploadError("");
    setIsModalOpen(true);
  };

  const closeModal = () => {
    setIsModalOpen(false);
    setSelectedDocument(null);
  };

  useEffect(() => {
    return () => {
      Object.values(documentFiles)
        .flat()
        .forEach((file) => {
          if (file.url) URL.revokeObjectURL(file.url);
        });
    };
  }, [documentFiles]);

  useEffect(() => {
    const isValid = documents.every(
      (doc) =>
        !doc.required ||
        (doc.status === "uploaded" && (doc.attachmentCount || 0) > 0)
    );
    onValidationChange(isValid);
  }, [documents, onValidationChange]);

  const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    if (!e.target.files) return;
    processFiles(Array.from(e.target.files));
  };

  const processFiles = (files: File[]) => {
    setUploadError("");

    const oversizedFiles = files.filter((file) => file.size > 30 * 1024 * 1024);
    if (oversizedFiles.length > 0) {
      setUploadError("File too large! Maximum file size is 30MB.");
      return;
    }

    const newFiles: FileUpload[] = files.map((file) => ({
      id: Date.now() + Math.random().toString(36).substring(2, 9),
      file,
      name: file.name,
      size: file.size,
      type: file.type,
      url: URL.createObjectURL(file),
    }));

    setFileUploads((prev) => [...prev, ...newFiles]);
  };

  const removeFile = (fileId: string) => {
    const fileToRemove = fileUploads.find((f) => f.id === fileId);
    if (fileToRemove?.url) URL.revokeObjectURL(fileToRemove.url);

    setFileUploads((prev) => prev.filter((f) => f.id !== fileId));
  };

  const handleDrop = (e: React.DragEvent<HTMLDivElement>) => {
    e.preventDefault();
    processFiles(Array.from(e.dataTransfer.files));
  };

  const handleDragOver = (e: React.DragEvent<HTMLDivElement>) => {
    e.preventDefault();
  };

  const formatFileSize = (bytes: number): string => {
    if (bytes < 1024) return `${bytes} B`;
    if (bytes < 1048576) return `${(bytes / 1024).toFixed(1)} KB`;
    return `${(bytes / 1048576).toFixed(1)} MB`;
  };

  const handleSubmit = () => {
    if (!selectedDocument) return;

    const updatedFiles = { ...documentFiles };
    if (fileUploads.length > 0) {
      updatedFiles[selectedDocument.id] = fileUploads;
    } else {
      delete updatedFiles[selectedDocument.id];
    }

    setDocumentFiles(updatedFiles);

    updateDocument(
      selectedDocument.id,
      fileUploads.length > 0 ? "uploaded" : "pending",
      fileUploads
    );

    closeModal();
  };

  const getStatusLabel = (status: string, count: number) => {
    if (status === "uploaded") {
      return (
        <div className="flex items-center bg-green-100 text-green-800 py-2 px-4 rounded">
          <svg
            className="w-5 h-5 mr-2"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth="2"
              d="M5 13l4 4L19 7"
            ></path>
          </svg>
          Uploaded with {count} {count === 1 ? "attachment" : "attachments"}
        </div>
      );
    }
    return (
      <div className="flex items-center bg-red-100 text-red-800 py-2 px-4 rounded">
        <svg
          className="w-5 h-5 mr-2"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            strokeLinecap="round"
            strokeLinejoin="round"
            strokeWidth="2"
            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
          ></path>
        </svg>
        Not Yet Uploaded
      </div>
    );
  };

  const DocumentModal = () => {
    if (!selectedDocument) return null;

    return (
      <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div className="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
          <h3 className="text-xl font-semibold mb-4">
            Upload {selectedDocument.name}
          </h3>

          <p className="text-gray-600 mb-4">
            {selectedDocument.name === "Government ID Copies"
              ? "Please upload government ID copies (i.e. SSS, TIN, PhilHealth, Pag-ibig)"
              : `Please upload your ${selectedDocument.name.toLowerCase()}`}
          </p>

          {/* File drop area */}
          <div
            className="border-2 border-dashed border-teal-300 rounded-lg p-8 mb-4 text-center cursor-pointer hover:bg-teal-50"
            onDrop={handleDrop}
            onDragOver={handleDragOver}
            onClick={() => document.getElementById("fileInput")?.click()}
          >
            <div className="flex justify-center mb-2">
              <div className="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                <svg
                  className="w-8 h-8 text-teal-500"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="2"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"
                  ></path>
                </svg>
              </div>
            </div>
            <p className="text-gray-700">Click or drag a file here to upload</p>
            <input
              id="fileInput"
              type="file"
              className="hidden"
              onChange={handleFileChange}
              multiple
            />
          </div>

          {/* Error message */}
          {uploadError && (
            <div className="text-red-500 mb-4">{uploadError}</div>
          )}

          {/* File list */}
          {fileUploads.length > 0 && (
            <div className="mb-4">
              <p className="font-semibold mb-2">Uploads</p>
              <div className="max-h-48 overflow-y-auto">
                {fileUploads.map((file) => (
                  <div
                    key={file.id}
                    className="flex items-center justify-between bg-gray-50 p-3 rounded mb-2"
                  >
                    <div className="flex items-center">
                      <div className="w-10 h-10 bg-red-500 text-white rounded flex items-center justify-center mr-3">
                        <span className="text-xs font-bold">
                          {file.name.split(".").pop()?.toUpperCase() || ""}
                        </span>
                      </div>
                      <div>
                        <p className="text-sm font-medium">{file.name}</p>
                        <p className="text-xs text-gray-500">
                          {formatFileSize(file.size)}
                        </p>
                      </div>
                    </div>
                    <button
                      onClick={() => removeFile(file.id)}
                      className="text-gray-500 hover:text-red-500"
                    >
                      <svg
                        className="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          strokeLinecap="round"
                          strokeLinejoin="round"
                          strokeWidth="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                        ></path>
                      </svg>
                    </button>
                  </div>
                ))}
              </div>
            </div>
          )}

          {/* Action buttons */}
          <div className="flex justify-end space-x-2">
            <button
              onClick={closeModal}
              className="px-4 py-2 text-gray-700 border border-gray-300 rounded hover:bg-gray-50"
            >
              Cancel
            </button>
            <button
              onClick={handleSubmit}
              disabled={fileUploads.length === 0}
              className={`px-4 py-2 text-white rounded ${
                fileUploads.length === 0
                  ? "bg-gray-400 cursor-not-allowed"
                  : "bg-teal-500 hover:bg-teal-600"
              }`}
            >
              Upload
            </button>
          </div>
        </div>
      </div>
    );
  };

  return (
    <div className="p-4 bg-white shadow rounded-lg">
      <div className="mb-6">
        <h2 className="text-xl font-semibold mb-2">
          Document Attachments Section
        </h2>
        <div className="bg-gray-100 p-4 rounded-lg mb-4">
          <div className="flex items-center gap-2 mb-2">
            <div className="w-6 h-6 bg-teal-500 text-white rounded-full flex items-center justify-center text-xs">
              6
            </div>
            <h3 className="font-medium">Document Attachment</h3>
          </div>
          <p className="text-gray-700 text-sm">
            Please ensure the documents you intend to upload are complete,
            accurate, and properly named for easy identification.
          </p>
        </div>
      </div>

      {/* Document List */}
      <div className="mb-8">
        <div className="grid grid-cols-12 gap-4 py-2 mb-2 font-semibold bg-gray-50 px-4">
          <div className="col-span-1">#</div>
          <div className="col-span-5">Required Document</div>
          <div className="col-span-4">Status</div>
          <div className="col-span-2">Action</div>
        </div>

        {documents.map((doc) => (
          <div
            key={doc.id}
            className="grid grid-cols-12 gap-4 py-4 border-b border-gray-200 px-4"
          >
            <div className="col-span-1">{doc.id}.</div>
            <div className="col-span-5">
              {doc.name}
              {doc.required && <span className="text-red-500 ml-1">*</span>}
            </div>
            <div className="col-span-4">
              {doc.status === "uploaded"
                ? getStatusLabel("uploaded", doc.attachmentCount || 0)
                : getStatusLabel("pending", 0)}
            </div>
            <div className="col-span-2">
              {doc.status === "uploaded" ? (
                <button
                  className="text-teal-600 hover:text-teal-800 font-medium flex items-center"
                  onClick={() => openModal(doc)}
                >
                  <svg
                    className="w-5 h-5 mr-1"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    ></path>
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                    ></path>
                  </svg>
                  View{" "}
                  {(doc.attachmentCount || 0) > 1
                    ? "Attachments"
                    : "Attachment"}
                </button>
              ) : (
                <button
                  className="text-teal-600 hover:text-teal-800 font-medium flex items-center"
                  onClick={() => openModal(doc)}
                >
                  <svg
                    className="w-5 h-5 mr-1"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0l-4 4m4-4v12"
                    ></path>
                  </svg>
                  Upload
                </button>
              )}
            </div>
          </div>
        ))}
      </div>

      {/* Navigation buttons */}
      <div className="flex justify-between mt-8">
        <button className="px-4 py-2 border border-gray-300 rounded hover:bg-gray-50">
          Back
        </button>
        <button className="px-4 py-2 bg-teal-500 text-white rounded hover:bg-teal-600">
          Next
        </button>
      </div>

      {isModalOpen && <DocumentModal />}
    </div>
  );
};

export default DocumentUploader;
