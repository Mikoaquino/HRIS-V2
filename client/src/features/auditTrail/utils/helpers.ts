/**
 * Format date string into different formats
 * @param dateString - Date string to format
 * @param type - Type of format ('full', 'day', or 'time')
 * @returns Formatted date string
 */
export const formatDate = (dateString: string, type: 'full' | 'day' | 'time' = 'full'): string => {
    if (!dateString) return 'N/A';
    
    const date = new Date(dateString);
    
    if (type === 'day') {
      return date.toLocaleDateString('en-US', { weekday: 'long' });
    }
    
    if (type === 'time') {
      return date.toLocaleTimeString('en-US', {
        hour: '2-digit',
        minute: '2-digit',
        hour12: false
      });
    }
    
    return date.toLocaleDateString('en-US', {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: '2-digit',
      hour: '2-digit',
      minute: '2-digit',
      hour12: false
    });
  };