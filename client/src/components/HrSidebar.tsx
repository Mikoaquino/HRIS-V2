import { useState } from "react";
import { Link } from "react-router-dom";

const HrSidebar = () => {
  const [activeCategory, setActiveCategory] = useState("dashboard");

  const toggleSubmenu = (category: string) => {
    setActiveCategory(activeCategory === category ? "" : category);
  };

  return (
    <aside className=" w-[240px] top-0 bottom-0 left-0 text-[#14112d] max-h-full z-[1024] bg-white shadow-[0px_8px_14.72px_1.28px_rgba(154,154,204,0.1)] border-r border-[#ededf5] transition-[left,width] duration-[320ms] ease-[ease]">
      <div className="h-16 px-5 py-3  bg-white border-b border-r border-[#ededf5]  z-[999] top-0 left-0 right-0 transition-[left,width] duration-[320ms] ease-[ease] outline-none">
        <h2 className="text-2xl font-bold text-blue-600 text-center">NOWA</h2>
      </div>
      <div className="">
        <nav className="mt-6">
          {/* Main Category */}
          <div className="pb-2">
            <p className="text-[#7b8191] text-[11px] uppercase font-medium tracking-[0.5px] mb-3 h-[15px] px-[20px] pl-[25px] opacity-60 whitespace-nowrap">
              Main
            </p>

            <div className="space-y-1">
              <div>
                <button
                  onClick={() => toggleSubmenu("dashboard")}
                  className={`w-full flex items-center justify-between px-[30px]  py-[10px] text-[14px] font-semibold whitespace-nowrap 
    ${
      activeCategory === "dashboard"
        ? "bg-white border-r-[3px] border-r-primary text-primary"
        : "text-gray-700"
    } hover:text-primary focus:text-primary`}
                >
                  {/* Left content: icon + text */}
                  <div className="flex items-center">
                    <svg
                      className="w-5 h-5 mr-3 text-gray-600"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                      />
                    </svg>
                    <span>Dashboards</span>
                  </div>

                  <svg
                    className={`w-4 h-4 transform ${
                      activeCategory === "dashboard" ? "rotate-90" : ""
                    }`}
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M9 5l7 7-7 7"
                    />
                  </svg>
                </button>

                {activeCategory === "dashboard" && (
                  <div className="pl-12 pr-4 py-2 space-y-1">
                    <Link
                      to="/hr-dashboard"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      HR Dashboard{" "}
                    </Link>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Dashboard-2
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Dashboard-3
                    </a>
                  </div>
                )}
              </div>
            </div>
          </div>

          {/* Web Apps Category */}
          <div className="pb-2 mt-4">
            <p className="text-[#7b8191] text-[11px] uppercase font-medium tracking-[0.5px] mb-3 h-[15px] px-[20px] pl-[25px] opacity-60 whitespace-nowrap">
              Web Apps
            </p>
            <div className="space-y-1">
              <div>
                <button
                  onClick={() => toggleSubmenu("apps")}
                  className="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-md"
                >
                  <div className="flex items-center">
                    <svg
                      className="w-5 h-5 mr-3 text-gray-600"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"
                      ></path>
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"
                      ></path>
                    </svg>
                    <span>Apps</span>
                  </div>
                  <svg
                    className={`w-4 h-4 transform ${
                      activeCategory === "apps" ? "rotate-90" : ""
                    }`}
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M9 5l7 7-7 7"
                    ></path>
                  </svg>
                </button>

                {activeCategory === "apps" && (
                  <div className="pl-12 pr-4 py-2 space-y-1">
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Cards
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Calendar
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Contacts
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      File Manager
                    </a>
                  </div>
                )}
              </div>

              <div>
                <button
                  onClick={() => toggleSubmenu("elements")}
                  className="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-md"
                >
                  <div className="flex items-center">
                    <svg
                      className="w-5 h-5 mr-3 text-gray-600"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M4 6h16M4 12h16m-7 6h7"
                      ></path>
                    </svg>
                    <span>Elements</span>
                  </div>
                  <svg
                    className={`w-4 h-4 transform ${
                      activeCategory === "elements" ? "rotate-90" : ""
                    }`}
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M9 5l7 7-7 7"
                    ></path>
                  </svg>
                </button>

                {activeCategory === "elements" && (
                  <div className="pl-12 pr-4 py-2 space-y-1">
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Alerts
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Buttons
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Badges
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Navigation
                    </a>
                  </div>
                )}
              </div>
            </div>
          </div>

          {/* Pages Category */}
          <div className="pb-2 mt-4">
            <p className="text-[#7b8191] text-[11px] uppercase font-medium tracking-[0.5px] mb-3 h-[15px] px-[20px] pl-[25px] opacity-60 whitespace-nowrap">
              Pages
            </p>
            <div className="space-y-1">
              <div>
                <button
                  onClick={() => toggleSubmenu("pages")}
                  className="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-md"
                >
                  <div className="flex items-center">
                    <svg
                      className="w-5 h-5 mr-3 text-gray-600"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"
                      ></path>
                    </svg>
                    <span>Pages</span>
                  </div>
                  <svg
                    className={`w-4 h-4 transform ${
                      activeCategory === "pages" ? "rotate-90" : ""
                    }`}
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M9 5l7 7-7 7"
                    ></path>
                  </svg>
                </button>

                {activeCategory === "pages" && (
                  <div className="pl-12 pr-4 py-2 space-y-1">
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Profile
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Settings
                    </a>
                    <Link
                      to="/audit-trail"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Audit Trail
                    </Link>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Pricing
                    </a>
                  </div>
                )}
              </div>
            </div>
          </div>

          {/* Components Category */}
          <div className="pb-2 mt-4">
            <p className="text-[#7b8191] text-[11px] uppercase font-medium tracking-[0.5px] mb-3 h-[15px] px-[20px] pl-[25px] opacity-60 whitespace-nowrap">
              Components
            </p>
            <div className="space-y-1">
              <div>
                <button
                  onClick={() => toggleSubmenu("forms")}
                  className="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-md"
                >
                  <div className="flex items-center">
                    <svg
                      className="w-5 h-5 mr-3 text-gray-600"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                      ></path>
                    </svg>
                    <span>Forms</span>
                  </div>
                  <svg
                    className={`w-4 h-4 transform ${
                      activeCategory === "forms" ? "rotate-90" : ""
                    }`}
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M9 5l7 7-7 7"
                    ></path>
                  </svg>
                </button>

                {activeCategory === "forms" && (
                  <div className="pl-12 pr-4 py-2 space-y-1">
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Form Elements
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Advanced Forms
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Form Layouts
                    </a>
                    <a
                      href="#"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Form Validation
                    </a>
                  </div>
                )}
              </div>
            </div>
          </div>
        </nav>
      </div>
    </aside>
  );
};

export default HrSidebar;
