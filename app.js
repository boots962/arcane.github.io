fetch('https://api.ipify.org?format=json')
  .then(response => response.json())
  .then(data => {
    // Access the IP address from the response
    const clientIP = data.ip;
    console.log('Client IP Address:', clientIP);
  })
  .catch(error => {
    console.error('Error fetching IP address:', error);
  });