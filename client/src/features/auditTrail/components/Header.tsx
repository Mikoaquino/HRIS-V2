import React, { useState } from "react";
import { Menu } from "lucide-react";

interface HeaderProps {
  toggleMobileMenu: () => void;
}

const Header: React.FC<HeaderProps> = ({ toggleMobileMenu }) => {
  const [showMessages, setShowMessages] = useState(false);
  const [showNotifications, setShowNotifications] = useState(false);
  const [showUserDropdown, setShowUserDropdown] = useState(false);

  const toggleMessages = () => {
    setShowMessages(!showMessages);
    setShowNotifications(false);
    setShowUserDropdown(false);
  };

  const toggleNotifications = () => {
    setShowNotifications(!showNotifications);
    setShowMessages(false);
    setShowUserDropdown(false);
  };

  const toggleUserDropdown = () => {
    setShowUserDropdown(!showUserDropdown);
    setShowMessages(false);
    setShowNotifications(false);
  };

  const toggleFullscreen = () => {
    if (!document.fullscreenElement) {
      document.documentElement.requestFullscreen();
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      }
    }
  };

  return (
    <header className="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-40">
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between h-16">
          {/* Left Section - Logo and Toggle */}
          <div className="flex items-center">
            <div className="flex items-center mr-4">
              <button
                className="lg:hidden mr-2 text-gray-600 hover:text-gray-900"
                onClick={toggleMobileMenu}
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
                    d="M4 6h16M4 12h16M4 18h16"
                  ></path>
                </svg>
              </button>
              <a href="/" className="flex items-center">
                <Menu className="h-6 w-6 text-gray-800" />
              </a>
            </div>

            {/* Search Bar */}
            <div className="hidden md:flex relative">
              <input
                type="search"
                placeholder="Search..."
                className="w-64 pl-3 pr-10 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
              />
              <button className="absolute right-2 top-2.5 text-gray-500">
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
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                  ></path>
                </svg>
              </button>
            </div>
          </div>

          {/* Right Section - Icons and User */}
          <div className="flex items-center space-x-2">
            {/* Theme Toggle */}
            <button className="p-1 text-gray-600 hover:text-gray-900 rounded-full hover:bg-gray-100">
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
                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                ></path>
              </svg>
            </button>

            {/* Messages Dropdown */}
            <div className="relative">
              <button
                className="p-1 text-gray-600 hover:text-gray-900 rounded-full hover:bg-gray-100"
                onClick={toggleMessages}
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
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  ></path>
                </svg>
                <span className="absolute top-0 right-0 w-4 h-4 bg-red-500 text-xs text-white rounded-full flex items-center justify-center">
                  5
                </span>
              </button>

              {showMessages && (
                <div className="absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-200">
                  <div className="px-4 py-2 border-b border-gray-200">
                    <div className="flex justify-between items-center">
                      <h6 className="text-sm font-medium">Messages</h6>
                      <button className="text-xs text-blue-500 hover:text-blue-700">
                        Mark All Read
                      </button>
                    </div>
                    <p className="text-xs text-gray-500">
                      You have 4 unread messages
                    </p>
                  </div>

                  <div className="max-h-64 overflow-y-auto">
                    {[1, 2, 3, 4].map((item) => (
                      <a
                        key={item}
                        href="/chat"
                        className="flex px-4 py-3 hover:bg-gray-50 border-b border-gray-100"
                      >
                        <div className="flex-shrink-0">
                          <img
                            src="/api/placeholder/40/40"
                            alt="User"
                            className="rounded-full w-10 h-10"
                          />
                        </div>
                        <div className="ml-3 flex-1">
                          <div className="flex items-baseline">
                            <h5 className="text-sm font-medium text-gray-900">
                              User {item}
                            </h5>
                          </div>
                          <p className="text-xs text-gray-500 truncate">
                            This is a sample message preview...
                          </p>
                          <p className="text-xs text-gray-400 mt-1">
                            2 hours ago
                          </p>
                        </div>
                      </a>
                    ))}
                  </div>

                  <div className="px-4 py-2 text-center border-t border-gray-200">
                    <a
                      href="/messages"
                      className="text-sm text-blue-500 hover:text-blue-700"
                    >
                      View All
                    </a>
                  </div>
                </div>
              )}
            </div>

            {/* Notifications Dropdown */}
            <div className="relative">
              <button
                className="p-1 text-gray-600 hover:text-gray-900 rounded-full hover:bg-gray-100"
                onClick={toggleNotifications}
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
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                  ></path>
                </svg>
                <span className="absolute top-0 right-0 w-4 h-4 bg-red-500 text-xs text-white rounded-full flex items-center justify-center"></span>
              </button>

              {showNotifications && (
                <div className="absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-200">
                  <div className="px-4 py-2 border-b border-gray-200">
                    <div className="flex justify-between items-center">
                      <h6 className="text-sm font-medium">Notifications</h6>
                      <button className="text-xs text-blue-500 hover:text-blue-700">
                        Mark All Read
                      </button>
                    </div>
                    <p className="text-xs text-gray-500">
                      You have 4 unread notifications
                    </p>
                  </div>

                  <div className="max-h-64 overflow-y-auto">
                    {[
                      {
                        icon: "folder",
                        color: "pink",
                        text: "New files available",
                      },
                      {
                        icon: "bell",
                        color: "purple",
                        text: "Updates Available",
                      },
                      {
                        icon: "shopping-cart",
                        color: "green",
                        text: "New Order Received",
                      },
                      {
                        icon: "envelope",
                        color: "yellow",
                        text: "New review received",
                      },
                    ].map((item, index) => (
                      <a
                        key={index}
                        href="/notifications"
                        className="flex px-4 py-3 hover:bg-gray-50 border-b border-gray-100"
                      >
                        <div
                          className={`flex-shrink-0 bg-${item.color}-500 rounded-lg p-2 text-white`}
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
                              d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"
                            ></path>
                          </svg>
                        </div>
                        <div className="ml-3 flex-1">
                          <h5 className="text-sm font-medium text-gray-900">
                            {item.text}
                          </h5>
                          <p className="text-xs text-gray-400 mt-1">
                            {index + 1} hour{index !== 0 ? "s" : ""} ago
                          </p>
                        </div>
                        <div className="text-gray-400">
                          <svg
                            className="w-4 h-4"
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
                        </div>
                      </a>
                    ))}
                  </div>

                  <div className="px-4 py-2 text-center border-t border-gray-200">
                    <a
                      href="/notifications"
                      className="text-sm text-blue-500 hover:text-blue-700"
                    >
                      View All
                    </a>
                  </div>
                </div>
              )}
            </div>

            {/* Fullscreen Toggle */}
            <button
              className="p-1 text-gray-600 hover:text-gray-900 rounded-full hover:bg-gray-100"
              onClick={toggleFullscreen}
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
                  d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"
                ></path>
              </svg>
            </button>

            {/* User Dropdown */}
            <div className="relative">
              <button
                className="flex items-center text-sm focus:outline-none"
                onClick={toggleUserDropdown}
              >
                <img
                  src="/api/placeholder/40/40"
                  alt="User"
                  className="h-8 w-8 rounded-full object-cover border-2 border-gray-200"
                />
              </button>

              {showUserDropdown && (
                <div className="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-200">
                  <div className="px-4 py-3 border-b border-gray-200">
                    <div className="flex items-center">
                      <img
                        src="/api/placeholder/40/40"
                        alt="User"
                        className="h-10 w-10 rounded-full"
                      />
                      <div className="ml-3">
                        <h6 className="text-sm font-medium text-gray-900">
                          Teri Dactyl
                        </h6>
                        <p className="text-xs text-gray-500">Premium Member</p>
                      </div>
                    </div>
                  </div>

                  <a
                    href="/profile"
                    className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                  >
                    <i className="far fa-user-circle mr-2"></i>Profile
                  </a>
                  <a
                    href="/chat"
                    className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                  >
                    <i className="far fa-smile mr-2"></i>Chat
                  </a>
                  <a
                    href="/inbox"
                    className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                  >
                    <i className="far fa-envelope mr-2"></i>Inbox
                  </a>
                  <a
                    href="/messages"
                    className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                  >
                    <i className="far fa-comment-dots mr-2"></i>Messages
                  </a>
                  <a
                    href="/settings"
                    className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                  >
                    <i className="far fa-sun mr-2"></i>Settings
                  </a>
                  <a
                    href="/logout"
                    className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                  >
                    <i className="far fa-arrow-alt-circle-left mr-2"></i>Sign
                    Out
                  </a>
                </div>
              )}
            </div>
          </div>
        </div>
      </div>
    </header>
  );
};

export default Header;
