import React from "react";
import HrDashboardChart from "../components/HrDashboardChart";
import AttendanceSummaryCard from "../components/AttendanceSummaryCard";
import CalendarCard from "../components/CalendarCard";
import EmployeeStatisticsCard from "../components/EmployeeStatisticsCard";
import DailyTimeRecordCard from "../components/DailyTimeRecordCard";
import RemindersCard from "../components/RemindersCard";

const HrDashboard: React.FC = () => {
  return (
    <div className="flex flex-col">
      <div className="flex justify-between mb-6">
        <div>
          <span className="text-xl font-semibold">
            Hi, WELCOME BACK <span className="text-teal-400">ADMIN</span>
          </span>
        </div>
      </div>

      {/* Main content */}
      <div className="flex flex-col lg:flex-row">
        <div className="w-full xl:w-9/12 lg:w-full md:w-full sm:w-full">
          <div className="w-full">
            <div className="bg-white rounded-lg shadow px-3">
              <div className="flex flex-wrap">
                {/* Applicants Card */}
                <div className="w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-1/2">
                  <div className="flex border-r border-gray-200 p-3">
                    <div className="flex items-center justify-center w-1/4">
                      <div className="bg-teal-500 rounded-full h-10 w-10 flex items-center justify-center shadow-md">
                        <i className="text-white">📄</i>{" "}
                      </div>
                    </div>
                    <div className="w-3/4 py-0">
                      <div className="pt-4 pb-3">
                        <div className="flex">
                          <h6 className="mb-2 text-sm font-semibold">
                            Applicants
                          </h6>
                        </div>
                        <div className="pb-0 mt-0">
                          <div className="flex">
                            <h4 className="text-xs  mb-0">
                              Review and verify candidates, resumes and
                              documents.
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Leaves Card */}
                <div className="w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-1/2">
                  <div className="flex border-r border-gray-200 p-3">
                    <div className="flex items-center justify-center w-1/4">
                      <div className="bg-yellow-400 rounded-full h-10 w-10 flex items-center justify-center shadow-md">
                        <i className="text-white">💲</i>
                      </div>
                    </div>
                    <div className="w-3/4">
                      <div className="pt-4 pb-3">
                        <div className="flex">
                          <h6 className="mb-2 text-sm font-semibold">Leaves</h6>
                        </div>
                        <div className="pb-0 mt-0">
                          <div className="flex">
                            <h4 className="text-xs mb-0">
                              Track pending leaves request, its leave type and
                              approval
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Attendance Card */}
                <div className="w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-1/2">
                  <div className="flex  p-3">
                    <div className="flex items-center justify-center w-1/4">
                      <div className="bg-pink-500 rounded-full h-10 w-10 flex items-center justify-center shadow-md">
                        <i className="text-white">🔗</i>
                      </div>
                    </div>
                    <div className="w-3/4">
                      <div className="pt-4 pb-3">
                        <div className="flex">
                          <h6 className="mb-2 text-sm font-semibold">
                            Attendance
                          </h6>
                        </div>
                        <div className="pb-0 mt-0">
                          <div className="flex">
                            <h4 className="text-xs mb-0">
                              Monitor employee's attendance, absences, and work
                              day hours
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {/* Key Metrics Chart */}
          <div className="w-full mt-4">
            <div className="flex flex-col">
              <div className="w-full">
                <HrDashboardChart></HrDashboardChart>
              </div>
            </div>
          </div>
          {/* Statistics Card */}
          <div className="w-full mt-4">
            <div className="flex flex-col xl:flex-row justify-center">
              <div className="w-full xl:w-5/12">
                <div className="bg-white rounded-lg shadow p-4">
                  <EmployeeStatisticsCard
                    totalEmployment={247}
                    newHires={15}
                    departures={3}
                    onProbation={8}
                  />
                </div>
              </div>

              {/* Reminders Card */}
              <div className="w-full xl:w-4/12 mt-4 xl:mt-0 xl:ml-4">
                <RemindersCard></RemindersCard>
              </div>
            </div>
          </div>
        </div>
        {/* Calendar Card, Attendance Summary Card, and Daily Time Record Card */}
        <div className="w-full xl:w-3/12 lg:w-full md:w-full sm:w-full mt-4 xl:mt-0 xl:pl-4">
          <div className="bg-white rounded-lg shadow p-4 mb-4">
            <CalendarCard></CalendarCard>
          </div>

          <div className="bg-white rounded-lg shadow p-4 mb-4">
            <AttendanceSummaryCard></AttendanceSummaryCard>
          </div>

          <DailyTimeRecordCard></DailyTimeRecordCard>
        </div>
      </div>
    </div>
  );
};

export default HrDashboard;
