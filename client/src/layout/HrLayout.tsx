import { ReactNode, useState, useEffect } from "react";
import HrSidebar from "../components/HrSidebar";
import { Outlet } from "react-router-dom";
import Header from "../features/auditTrail/components/Header";

interface HrLayoutProps {
  children: ReactNode;
}

const HrLayout = ({ children }: HrLayoutProps) => {
  const [loading, setLoading] = useState(true);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  useEffect(() => {
    const timer = setTimeout(() => {
      setLoading(false);
    }, 800);

    return () => clearTimeout(timer);
  }, []);

  const toggleMobileMenu = () => {
    setMobileMenuOpen(!mobileMenuOpen);
  };

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Loader */}
      {loading && (
        <div className="fixed inset-0 flex items-center justify-center bg-white z-50">
          <img
            src="/assets/img/loader.svg"
            className="w-16 h-16"
            alt="Loader"
          />
        </div>
      )}

      {/* Page */}
      <div className="flex h-screen overflow-hidden">
        {/* Sidebar - desktop */}
        <HrSidebar />

        {/* Mobile Sidebar */}
        {mobileMenuOpen && (
          <div className="lg:hidden fixed inset-0 z-40">
            <div
              className="fixed inset-0 bg-gray-600 bg-opacity-75"
              onClick={toggleMobileMenu}
            ></div>
            <div className="relative flex flex-col w-80 max-w-xs h-full bg-white">
              <div className="absolute top-0 right-0 p-1">
                <button
                  onClick={toggleMobileMenu}
                  className="flex items-center justify-center w-10 h-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                >
                  <svg
                    className="w-6 h-6 text-gray-600"
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
                    ></path>
                  </svg>
                </button>
              </div>
              <div className="flex-1 overflow-y-auto pt-5 pb-4">
                <HrSidebar />
              </div>
            </div>
          </div>
        )}

        {/* Main Content Area */}
        <div className="flex flex-col flex-1 overflow-hidden">
          {/* Header */}
          <Header toggleMobileMenu={toggleMobileMenu} />

          {/* Main Content */}
          <div className="flex-1 overflow-y-auto bg-gray-50">
            <div className="w-full mx-auto px-4 py-6">
              <Outlet />
            </div>
          </div>

          {/* Footer */}
          <footer className="bg-white border-t border-gray-200 py-4">
            <div className="container mx-auto px-4">
              <div className="text-center text-sm text-gray-500">
                <span></span>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  );
};

export default HrLayout;
