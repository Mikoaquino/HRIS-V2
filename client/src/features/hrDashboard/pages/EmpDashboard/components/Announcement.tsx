import { useRef, useState } from 'react';
import { Maximize2, Minimize2 } from 'lucide-react';

interface AnnouncementItemProps {
  title: string;
  description: string;
}

function AnnouncementItem({ title, description }: AnnouncementItemProps) {
  return (
    <li className="mb-6">
      <h3 className="text-sm font-medium text-gray-700 mb-1">{title}:</h3>
      <p className="text-sm text-gray-600">"{description}"</p>
    </li>
  );
}

export default function Announcements() {
  const [isFullScreen, setIsFullScreen] = useState(false);
  const containerRef = useRef<HTMLDivElement>(null);

  const announcements = [
    {
      title: "New Policy Implementation",
      description:
        "Effective next month, we will be implementing a new remote work policy. Please review the details in the policy section of the portal.",
    },
    {
      title: "Work Anniversary",
      description:
        "Happy 5th work anniversary to John Smith! Thank you for your dedication and hard work over the years.",
    },
    {
      title: "Company Picnic",
      description:
        "Join us for the annual company picnic on July 15th at Central Park. Food, games, and fun for the whole family!",
    },
  ];

  const toggleFullScreen = async () => {
    const el = containerRef.current;

    if (!document.fullscreenElement && el) {
      await el.requestFullscreen();
      setIsFullScreen(true);
    } else {
      await document.exitFullscreen();
      setIsFullScreen(false);
    }
  };

  return (
    <div
      ref={containerRef}
      className="overflow-y-auto pr-2 flex-1 scroll-smooth h-[190px]"
    >
      <div className="p-4 h-full flex flex-col">
        {/* Header */}
        <div className="flex justify-between items-center mb-2">
          <div className="flex items-center">
            <div className="w-1 h-4 bg-teal-500 mr-1"></div>
            <h6 className="text-sm font-semibold text-gray-700 uppercase">ANNOUNCEMENTS</h6>
          </div>
          <button
            onClick={toggleFullScreen}
            className="text-gray-500 hover:text-gray-700 transition-colors text-sm"
          >
            {isFullScreen ? <Minimize2 size={20} /> : <Maximize2 size={20} />}
          </button>
        </div>

        {/* Announcements list */}
        <div className="max-h-[60vh] overflow-y-auto pr-2">
          <ul className="list-disc pl-6">
            {announcements.map((announcement, index) => (
              <AnnouncementItem 
                key={index}
                title={announcement.title} 
                description={announcement.description} 
              />
            ))}
          </ul>
        </div>

      </div>
    </div>
  );
}
