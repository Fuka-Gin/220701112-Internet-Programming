const express = require('express');
const bodyParser = require('body-parser');

// Create a Twilio client
const client = twilio(accountSid, authToken);

// Create an Express app
const app = express();

// Use bodyParser to parse JSON bodies into JS objects
app.use(bodyParser.json());

// Route to handle OTP requests
app.post('/send-otp', (req, res) => {
    const phoneNumber = req.body.phone;

    // Send the OTP using Twilio
    client.verify.v2.services("VAc101c716aae2fae861d715da46ff2862")
        .verifications
        .create({ to: phoneNumber, channel: 'sms' })
        .then(verification => {
            res.json({ message: `OTP sent successfully to ${phoneNumber}` });
        })
        .catch(error => {
            res.status(500).json({ message: `Failed to send OTP: ${error.message}` });
        });
});

// Serve the HTML file
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

// Start the server
const port = 3000;
app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
});
