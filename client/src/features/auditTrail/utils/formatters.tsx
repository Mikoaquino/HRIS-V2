import React from "react";

import { UserPlus, LogIn, LogOut, AlertCircle, User } from "lucide-react";
interface ActionBadge {
  color: string;
  text: string;
  icon: React.ReactNode; // Changed from string to ReactNode
}

export const formatDateTime = (
  dateString: string
): { day: string; time: string } => {
  const date = new Date(dateString);
  const days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  const day = days[date.getDay()];

  const hours = date.getHours().toString().padStart(2, "0");
  const minutes = date.getMinutes().toString().padStart(2, "0");

  return {
    day,
    time: `${hours}:${minutes}`,
  };
};

export const formatDate = (dateString: string): string => {
  const date = new Date(dateString);
  const monthNames = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const monthName = monthNames[date.getMonth()];
  return `${monthName} ${date.getDate()}, ${date.getFullYear()}`;
};

export const getActionBadge = (
  event: string,
  log_name: string
): ActionBadge => {
  if (log_name === "auth") {
    switch (event.toLowerCase()) {
      case "log in":
        return {
          color: "bg-green-800/25 text-teal-700",
          text: "Log In",
          icon: <LogIn size={16} className="text-teal-700" />,
        };
      case "logout":
        return {
          color: "bg-green-100 text-green-800",
          text: "Log Out",
          icon: <LogOut size={16} className="text-teal-700" />,
        };
      case "login_failed":
        return {
          color: "bg-red-100 text-red-800",
          text: "Log In Failed",
          icon: <AlertCircle size={16} className="text-teal-700" />,
        };
      default:
        return { color: "bg-gray-100 text-gray-800", text: event, icon: <></> };
    }
  }

  if (log_name === "employee") {
    switch (event.toLowerCase()) {
      case "created":
      case "add_account":
        return {
          color: "bg-green-100 text-green-800",
          text: "Add Employee",
          icon: <span>👨‍💼</span>, // wrapped as ReactNode
        };
      default:
        return { color: "bg-gray-100 text-gray-800", text: event, icon: <></> };
    }
  }

  if (log_name === "user") {
    switch (event.toLowerCase()) {
      case "created":
      case "add_account":
        return {
          color: "bg-green-100 text-green-800",
          text: "Add Account",
          icon: <span>👤</span>, // wrapped as ReactNode
        };
      default:
        return { color: "bg-gray-100 text-gray-800", text: event, icon: <></> };
    }
  }

  return { color: "bg-gray-100 text-gray-800", text: event, icon: <></> };
};
