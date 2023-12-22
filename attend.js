document.getElementById("submit-attendance").addEventListener("click", function() {
    let checkboxes = document.querySelectorAll(".attendance-checkbox");
    let presentStudents = 0;
    let absentStudents = [];

    checkboxes.forEach(function(checkbox, index) {
        if (checkbox.checked) {
            presentStudents++;
        } else {
            absentStudents.push("Student " + (index + 1));
        }
    });

    let presentStudentsElement = document.getElementById("present-students");
    let absentStudentsElement = document.getElementById("absent-students");

    presentStudentsElement.textContent = `Present Students: ${presentStudents}`;
    absentStudentsElement.textContent = `Absent Students: ${absentStudents.join(", ")}`;
});