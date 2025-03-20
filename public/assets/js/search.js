function searchStudents() {
    const query = document.getElementById("searchInput").value.toLowerCase();
    const selectedGrade = document.getElementById("gradeDropdown").value;
    const resultsContainer = document.getElementById("results");

    resultsContainer.innerHTML = '';

    const students = [
        { name: 'Anna Lee', details: 'Grade 1 student who loves drawing and playing with dolls.', grade: 'Grade 1', image: 'image/female.png', age: 6, gender: 'Female', section: 'A' },
    ];

    const filteredStudents = students.filter(student => 
        (selectedGrade === '' || student.grade === selectedGrade) &&
        (student.name.toLowerCase().includes(query) || student.details.toLowerCase().includes(query))
    );

    if (filteredStudents.length > 0) {
        filteredStudents.forEach(student => {
            const studentElement = document.createElement("div");
            studentElement.className = "result-item";
            studentElement.innerHTML = `
                <div class="profile">
                    <img src="${student.image}" alt="${student.name}" class="profile-image">
                    <div class="profile-info">
                        <h3>${student.name}</h3>
                        <p>${student.details}</p>
                        <p>Age: ${student.age}</p>
                        <p>Gender: ${student.gender}</p>
                    </div>
                </div>
            `;
            resultsContainer.appendChild(studentElement);
        });
    } else {
        const noResult = document.createElement("p");
        noResult.textContent = "No students found.";
        resultsContainer.appendChild(noResult);
    }
}