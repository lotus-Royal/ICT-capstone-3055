document.getElementById('reportForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from refreshing the page

    // Collect form data
    const idNum = document.getElementById('idnum').value;
    const fullName = document.getElementById('fullname').value;
    const birthDate = document.getElementById('birthday').value;
    const gender = document.querySelector('input[name="gender"]:checked')?.value || 'Not specified';
    const contact = document.getElementById('contact').value;
    const email = document.getElementById('email').value;
    const confirm = document.getElementById('confirm').checked;

    // Check if confirmation is checked
    if (!confirm) {
        alert('Please confirm the information before submitting.');
        return;
    }

    // Format the report
    const report = `
Medical Report
----------------------------------------
ID Number: ${idNum}
Full Name: ${fullName}
Birth Date: ${new Date(birthDate).toLocaleString()}
Gender: ${gender}
Contact: ${contact}
Email: ${email}
Confirmation: ${confirm ? 'Yes' : 'No'}
Generated On: ${new Date().toLocaleString()}
----------------------------------------
    `;

    // Display the report
    const reportOutput = document.getElementById('reportOutput');
    const reportContent = document.getElementById('reportContent');
    reportContent.textContent = report;
    reportOutput.style.display = 'block';
});