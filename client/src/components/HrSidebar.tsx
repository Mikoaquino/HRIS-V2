import { useState } from "react";
import { Link } from "react-router-dom";
import {
  UsersRound,
  Plane,
  Calendar,
  ShieldCheck,
  TimerReset,
  UserRoundPlus,
} from "lucide-react";

const HrSidebar = () => {
  const [activeCategory, setActiveCategory] = useState("dashboard");
  const [activeSubItem, setActiveSubItem] = useState("onboarding");

  const toggleSubmenu = (category: string) => {
    setActiveCategory(activeCategory === category ? "" : category);
  };

  const setActive = (item: string) => {
    setActiveSubItem(item);
  };

  const hrLinks = [
    { label: "Time Management", link: "/time-management", icon: Calendar },
    { label: "Leave Management", link: "/leave-management", icon: Plane },
    { label: "Certificates", link: "/certificates", icon: ShieldCheck },
    { label: "Audit Trail", link: "/audit-trail", icon: TimerReset },
    {
      label: "Account Management",
      link: "/account-management",
      icon: UserRoundPlus,
    },
  ];
  return (
    <aside className="w-[240px] top-0 bottom-0 left-0 text-[#14112d] max-h-full z-[1024] bg-white shadow-[0px_8px_14.72px_1.28px_rgba(154,154,204,0.1)] border-r border-[#ededf5] transition-[left,width] duration-[320ms] ease-[ease]">
      <div className="h-16 px-5 py-3 bg-white border-b border-r border-[#ededf5] z-[999] top-0 left-0 right-0 transition-[left,width] duration-[320ms] ease-[ease] outline-none">
        <h2 className="text-2xl font-bold text-blue-600 text-center">NOWA</h2>
      </div>
      <div className="">
        <nav className="mt-6">
          {/* Main Category */}
          <div className="pb-2">
            <p className="text-[#7b8191] text-[11px] uppercase font-medium tracking-[0.5px] mb-3 h-[15px] px-[20px] pl-[25px] opacity-60 whitespace-nowrap">
              TEMPORARY{" "}
            </p>

            <div className="space-y-1">
              <div>
                <button
                  onClick={() => toggleSubmenu("dashboard")}
                  className={`w-full flex items-center justify-between px-[30px] py-[10px] text-[14px]  whitespace-nowrap 
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
                      HR Dashboard
                    </Link>

                    <Link
                      to="/emp-dashboard"
                      className="block py-2 text-sm text-gray-600 hover:text-blue-600"
                    >
                      Employee Dashboard
                    </Link>
                  </div>
                )}
              </div>
            </div>
          </div>

          {/* HR Management Category */}
          <div className="pb-2">
            <p className="text-[#7b8191] text-[11px] uppercase font-medium tracking-[0.5px] mb-3 h-[15px] px-[20px] pl-[25px] opacity-60 whitespace-nowrap">
              MAIN{" "}
            </p>

            <div className="space-y-1">
              <div>
                <button
                  onClick={() => toggleSubmenu("hrManagement")}
                  className={`w-full flex items-center justify-between px-[30px] py-auto text-[14px]  whitespace-nowrap 
                    ${
                      activeCategory === "hrManagement"
                        ? "bg-white border-r-[3px] border-r-teal-400 text-primary"
                        : "text-gray-700"
                    } hover:text-primary focus:text-primary`}
                >
                  <div className="flex items-center">
                    <UsersRound
                      className="w-4 h-4 mr-3 text-teal-400"
                      fill="currentColor"
                    />
                    <span className="text-xs cursor-pointer">
                      Employee Management
                    </span>
                  </div>
                </button>

                {activeCategory === "hrManagement" && (
                  <div className="pl-12 pr-4 pt-4 space-y-4">
                    <div
                      className="flex items-center cursor-pointer"
                      onClick={() => setActive("employeeList")}
                    >
                      <div
                        className={`w-2 h-2 rounded-full border ${
                          activeSubItem === "employeeList"
                            ? "border-black"
                            : "border-gray-300"
                        } flex items-center justify-center mr-2`}
                      >
                        <span className="bg-transparent"></span>
                      </div>
                      <span
                        className={` text-xs ${
                          activeSubItem === "employeeList"
                            ? "text-black  "
                            : "text-gray-300 "
                        }`}
                      >
                        Employee List
                      </span>
                    </div>

                    <div>
                      <Link
                        to="/employee-management/onboarding"
                        className="flex items-center"
                        onClick={() => setActive("onboarding")}
                      >
                        <div
                          className={`w-2 h-2 rounded-full border ${
                            activeSubItem === "onboarding"
                              ? "border-black"
                              : "border-gray-300"
                          } flex items-center justify-center mr-2`}
                        >
                          <span className="bg-transparent"></span>
                        </div>
                        <span
                          className={`text-xs 
                          ${
                            activeSubItem === "onboarding"
                              ? "text-black "
                              : "text-gray-300"
                          }`}
                        >
                          Onboarding
                        </span>
                      </Link>
                    </div>

                    {/* Offboarding item */}
                    <div
                      className="flex items-center cursor-pointer"
                      onClick={() => setActive("offboarding")}
                    >
                      <div
                        className={`w-2 h-2 rounded-full border 
                          ${
                            activeSubItem === "offboarding"
                              ? "border-black"
                              : "border-gray-300"
                          } flex items-center justify-center mr-2`}
                      >
                        <span className="bg-transparent"></span>
                      </div>
                      <span
                        className={` text-xs 
                          ${
                            activeSubItem === "offboarding"
                              ? "text-black "
                              : "text-gray-300"
                          }`}
                      >
                        Offboarding
                      </span>
                    </div>
                  </div>
                )}
                <div className="space-y-1 mt-4">
                  {hrLinks.map((item) => {
                    const isActive = location.pathname === item.link;
                    const Icon = item.icon;
                    return (
                      <Link
                        key={item.label}
                        to={item.link}
                        className={`w-full flex items-center justify-between px-[30px] py-[10px] text-[14px]whitespace-nowrap ${
                          isActive ? "text-teal-400" : "text-gray-400"
                        } hover:text-teal-400 focus:text-teal-400`}
                      >
                        <div className="flex items-center">
                          <Icon
                            className={`w-4 h-4 mr-3 ${
                              isActive ? "text-teal-400" : "text-gray-400"
                            }`}
                          />
                          <span className="text-xs cursor-pointer">
                            {item.label}
                          </span>
                        </div>
                      </Link>
                    );
                  })}
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </aside>
  );
};

export default HrSidebar;
