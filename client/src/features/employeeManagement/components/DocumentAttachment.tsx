import { useState, useRef, useEffect } from "react";
import { Document, FileUpload } from "../types/onboarding";

interface DocumentAttachmentProps {
  documents?: Document[];
  onDocumentUpdate: (document: Document) => void;
  onValidationChange?: (isValid: boolean) => void;
}

const DocumentAttachment: React.FC<DocumentAttachmentProps> = ({
  documents = [],
  onDocumentUpdate,
  onValidationChange = () => {},
}) => {
  const [localDocuments, setLocalDocuments] = useState<Document[]>(documents);
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [selectedDocument, setSelectedDocument] = useState<Document | null>(
    null
  );
  const [fileUploads, setFileUploads] = useState<FileUpload[]>([]);
  const [uploadError, setUploadError] = useState("");
  const [previewFile, setPreviewFile] = useState<FileUpload | null>(null);
  const [isPreviewOpen, setIsPreviewOpen] = useState(false);
  const fileInputRef = useRef<HTMLInputElement>(null);
  const formatFileSize = (bytes: number): string => {
    if (bytes < 1024) return bytes + " B";
    else if (bytes > 1048576) return (bytes / 1024).toFixed(1) + " KB";
    else return (bytes / 1048576).toFixed(1) + " MB";
  };

  useEffect(() => {
    setLocalDocuments(documents);
  }, [documents]);
  const getFileExtension = (fileName: string | undefined) => {
    if (!fileName) return "";
    const parts = fileName.split(".");
    return parts.length > 1 ? parts.pop()?.toUpperCase() || "" : "";
  };
  useEffect(() => {
    const isValid = localDocuments.every(
      (doc) =>
        !doc.required ||
        (doc.status === "uploaded" && (doc.attachments?.length || 0) > 0)
    );
    onValidationChange(isValid);
  }, [localDocuments, onValidationChange]);

  const openModal = (document: Document) => {
    setSelectedDocument(document);
    setFileUploads(document.attachments || []);
    setUploadError("");
    setIsModalOpen(true);
  };

  const closeModal = () => {
    setIsModalOpen(false);
    setSelectedDocument(null);
  };

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
      id: Date.now() + Math.random().toString(36).substr(2, 9),
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
    if (fileToRemove?.url) {
      URL.revokeObjectURL(fileToRemove.url);
    }

    setFileUploads((prev) => prev.filter((f) => f.id !== fileId));
  };

  const handleSubmit = () => {
    if (!selectedDocument) return;

    const updatedDoc: Document = {
      ...selectedDocument,
      status: fileUploads.length > 0 ? "uploaded" : "pending",
      attachments: [...fileUploads],
      attachmentCount: fileUploads.length,
    };

    onDocumentUpdate(updatedDoc);

    setLocalDocuments((prev) =>
      prev.map((doc) => (doc.id === selectedDocument.id ? updatedDoc : doc))
    );

    closeModal();
  };
  useEffect(() => {
    const loadFromSession = () => {
      try {
        const savedDocs = sessionStorage.getItem("documents");
        if (savedDocs) {
          const parsedDocs = JSON.parse(savedDocs) as Document[];
          const docsWithAttachments = parsedDocs.map((doc) => ({
            ...doc,
            attachments:
              doc.attachments?.map((attr) => ({
                ...attr,
                file: new File([], attr.name, { type: attr.type }),
                url: "",
              })) || [],
          }));
          setLocalDocuments(docsWithAttachments);
        }
      } catch (error) {
        console.error("Failed to load documents", error);
      }
    };

    loadFromSession();
  }, []);

  const openPreview = (file: FileUpload) => {
    setPreviewFile(file);
    setIsPreviewOpen(true);
  };

  const closePreview = () => {
    setIsPreviewOpen(false);
    setPreviewFile(null);
  };

  const getStatusLabel = (doc: Document) => {
    const fileCount = doc.attachments?.length || 0;

    if (doc.status === "uploaded" && fileCount > 0) {
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
            />
          </svg>
          Uploaded with {fileCount} {fileCount === 1 ? "file" : "files"}
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
          />
        </svg>
        {fileCount > 0 ? "Pending Submission" : "Not Uploaded"}
      </div>
    );
  };

  const FileTypeIcon: React.FC<{ fileType: string }> = ({ fileType }) => {
    let icon = (
      <svg
        className="w-6 h-6"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fillRule="evenodd"
          d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
          clipRule="evenodd"
        />
      </svg>
    );

    if (fileType.includes("pdf")) {
      icon = (
        <svg
          className="w-6 h-6"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fillRule="evenodd"
            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
            clipRule="evenodd"
          />
          <path d="M8 7a1 1 0 00-1 1v5a1 1 0 001 1h4a1 1 0 001-1v-5a1 1 0 00-1-1H8z" />
        </svg>
      );
    } else if (fileType.includes("image")) {
      icon = (
        <svg
          className="w-6 h-6"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fillRule="evenodd"
            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
            clipRule="evenodd"
          />
        </svg>
      );
    }

    return <div className="text-gray-500">{icon}</div>;
  };

  const PreviewModal = () => {
    if (!previewFile) return null;

    const isImage = previewFile.type.includes("image");
    const isPdf = previewFile.type === "application/pdf";

    return (
      <div className="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-[1500]">
        <div className="bg-white p-4 rounded-lg shadow-lg w-4/5 max-w-4xl max-h-4/5 overflow-auto">
          <div className="flex justify-between items-center mb-4">
            <h3 className="text-xl font-semibold">{previewFile.name}</h3>
            <button
              onClick={closePreview}
              className="text-gray-500 hover:text-gray-700"
            >
              <svg
                className="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>

          <div className="flex justify-center items-center border rounded-lg p-4 bg-gray-50 h-96">
            {isImage ? (
              <img
                src={previewFile.url}
                alt={previewFile.name}
                className="max-h-full max-w-full object-contain"
              />
            ) : isPdf ? (
              <div className="text-center">
                <div className="bg-red-100 text-red-800 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                  <span className="text-2xl font-bold">PDF</span>
                </div>
                <p>PDF preview not available.</p>
                <a
                  href={previewFile.url}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="mt-4 inline-block px-4 py-2 bg-teal-500 text-white rounded hover:bg-teal-600"
                >
                  Open PDF
                </a>
              </div>
            ) : (
              <div className="text-center">
                <FileTypeIcon fileType={previewFile.type} />
                <p className="mt-4">
                  Preview not available for this file type.
                </p>
                <p className="text-sm text-gray-500 mt-2">{previewFile.type}</p>
              </div>
            )}
          </div>

          <div className="mt-4 flex justify-end">
            <button
              onClick={closePreview}
              className="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    );
  };

  const DocumentModal = () => {
    if (!selectedDocument) return null;

    return (
      <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-[1500]">
        <div className="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
          <h3 className="text-xl font-semibold mb-4">
            Upload {selectedDocument.name}
          </h3>

          <p className="text-gray-600 mb-4">
            {selectedDocument.name === "Government ID Copies"
              ? "Please upload government ID copies (i.e. SSS, TIN, PhilHealth, Pag-ibig)"
              : `Please upload your ${selectedDocument.name.toLowerCase()}`}
          </p>

          <div
            className="border-2 border-dashed border-teal-300 rounded-lg p-8 mb-4 text-center cursor-pointer hover:bg-teal-50"
            onDrop={(e) => {
              e.preventDefault();
              processFiles(Array.from(e.dataTransfer.files));
            }}
            onDragOver={(e) => e.preventDefault()}
            onClick={() => fileInputRef.current?.click()}
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
                  />
                </svg>
              </div>
            </div>
            <p className="text-gray-700">Click or drag a file here to upload</p>
            <input
              ref={fileInputRef}
              type="file"
              className="hidden"
              onChange={handleFileChange}
              multiple
            />
          </div>

          {uploadError && (
            <div className="text-red-500 mb-4">{uploadError}</div>
          )}

          {fileUploads.length > 0 ? (
            <div className="mb-4">
              <p className="font-semibold mb-2">
                Uploads ({fileUploads.length})
              </p>
              <div className="max-h-48 overflow-y-auto">
                {fileUploads.map((file) => (
                  <div
                    key={file.id}
                    className="flex items-center justify-between bg-gray-50 p-3 rounded mb-2"
                  >
                    <div className="flex items-center flex-1 min-w-0">
                      <button
                        onClick={() => openPreview(file)}
                        className="w-10 h-10 bg-red-500 text-white rounded flex items-center justify-center mr-3 hover:bg-red-600"
                      >
                        <span className="text-xs font-bold">
                          {getFileExtension(file.name)}
                        </span>
                      </button>
                      <div className="truncate">
                        <p className="text-sm font-medium truncate">
                          {file.name}
                        </p>
                        <p className="text-xs text-gray-500">
                          {formatFileSize(file.size)}
                        </p>
                      </div>
                    </div>
                    <div className="flex ml-2">
                      <button
                        onClick={() => openPreview(file)}
                        className="text-teal-500 hover:text-teal-700 mr-2"
                        title="Preview"
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
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                          />
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                          />
                        </svg>
                      </button>
                      <button
                        onClick={() => removeFile(file.id)}
                        className="text-gray-500 hover:text-red-500"
                        title="Remove"
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
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          ) : (
            <div className="mb-4 text-center p-4 bg-gray-50 rounded">
              <p className="text-gray-500">No files uploaded yet</p>
            </div>
          )}

          <div className="flex justify-end space-x-2">
            <button
              onClick={closeModal}
              className="px-4 py-2 text-gray-700 border border-gray-300 rounded hover:bg-gray-50"
            >
              Cancel
            </button>
            <button
              onClick={handleSubmit}
              className={`px-4 py-2 text-white rounded ${
                fileUploads.length === 0 &&
                selectedDocument.status === "uploaded"
                  ? "bg-red-500 hover:bg-red-600"
                  : fileUploads.length === 0
                  ? "bg-gray-400 cursor-not-allowed"
                  : "bg-teal-500 hover:bg-teal-600"
              }`}
            >
              {fileUploads.length === 0 &&
              selectedDocument.status === "uploaded"
                ? "Remove All Attachments"
                : "Upload"}
            </button>
          </div>
        </div>
      </div>
    );
  };

  return (
    <div className="p-4">
      <div className="bg-gray-100 p-4 rounded-lg mb-6">
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

      <div className="mb-8">
        <div className="grid grid-cols-12 gap-4 py-2 mb-2 font-semibold bg-gray-50 px-4">
          <div className="col-span-1">#</div>
          <div className="col-span-5 justify-center flex">
            Required Document
          </div>
          <div className="col-span-3 justify-center flex">Status</div>
          <div className="col-span-3 justify-center flex">Action</div>
        </div>

        {localDocuments.map((doc) => (
          <div
            key={doc.id}
            className="grid grid-cols-12 gap-4 py-4 border-b border-gray-200 px-4"
          >
            <div className="col-span-1">{doc.id}.</div>
            <div className="col-span-5 flex justify-center">
              {doc.name}
              {doc.required && <span className="text-red-500 ml-1">*</span>}
            </div>
            <div className="col-span-3">{getStatusLabel(doc)}</div>
            <div className="col-span-3 flex justify-center">
              <button
                className="text-teal-600 hover:text-teal-800 font-medium flex items-center"
                onClick={() => openModal(doc)}
              >
                {doc.status === "uploaded" ? (
                  <>
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
                      />
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                      />
                    </svg>
                    View{" "}
                    {(doc.attachmentCount || 0) > 1
                      ? "Attachments"
                      : "Attachment"}
                  </>
                ) : (
                  <>
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
                      />
                    </svg>
                    Upload
                  </>
                )}
              </button>
            </div>
          </div>
        ))}
      </div>

      {isModalOpen && <DocumentModal />}
      {isPreviewOpen && <PreviewModal />}
    </div>
  );
};

export default DocumentAttachment;
