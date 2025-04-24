import React from "react";

interface EmployeeStatisticsProps {
  totalEmployment: number;
  newHires: number;
  departures: number;
  onProbation: number;
}

const EmployeeStatisticsCard: React.FC<EmployeeStatisticsProps> = ({
  totalEmployment,
  newHires,
  departures,
  onProbation,
}) => {
  return (
    <div>
      <div className="pb-3">
        <h3 className="text-sm font-semibold mb-2">EMPLOYEE STATISTICS</h3>
      </div>
      <div className="mt-1">
        <div className="grid grid-cols-2 gap-4">
          <div className="p-2">
            <div className="border-2 border-gray-100  p-3 text-center rounded-lg">
              <h2 className="mb-1 font-bold text-xl">{totalEmployment}</h2>
              <p className="mb-0 text-gray-500">Total Employment</p>
            </div>
          </div>
          <div className="p-2">
            <div className="border-2 border-gray-100  p-3 text-center rounded-lg">
              <h2 className="mb-1 font-bold text-xl">{newHires}</h2>
              <p className="mb-0 text-gray-500">New Hires</p>
            </div>
          </div>
          <div className="p-2">
            <div className="border-2 border-gray-100  p-3 text-center rounded-lg">
              <h2 className="mb-1 font-bold text-xl">{departures}</h2>
              <p className="mb-0 text-gray-500">Departures</p>
            </div>
          </div>
          <div className="p-2">
            <div className="border-2 border-gray-100  p-3 text-center rounded-lg">
              <h2 className="mb-1 font-bold text-xl">{onProbation}</h2>
              <p className="mb-0 text-gray-500">On Probationary</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default EmployeeStatisticsCard;
