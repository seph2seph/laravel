function searchStudents() {
    const query = document.getElementById("searchInput").value.toLowerCase();
    const selectedGrade = document.getElementById("gradeDropdown").value;
    const resultsContainer = document.getElementById("results");

    resultsContainer.innerHTML = '';

    const students = [
        { name: 'Anna Lee', details: 'Grade 1 student who loves drawing and playing with dolls.', grade: 'Grade 1', image: 'image/female.png', age: 6, gender: 'Female', section: 'A' },
        { name: 'Tom Harris', details: 'Grade 1 student who enjoys playing with toy cars and building blocks.', grade: 'Grade 1', image: 'image/male.png', age: 6, gender: 'Male', section: 'B' },
        { name: 'Olivia Clark', details: 'Grade 1 student who likes reading picture books and playing with her pet cat.', grade: 'Grade 1', image: 'image/female.png', age: 6, gender: 'Female', section: 'A' },
        
        { name: 'Michael Brown', details: 'Grade 2 student who loves playing soccer and building with blocks.', grade: 'Grade 2', image: 'image/male.png', age: 7, gender: 'Male', section: 'A' },
        { name: 'James Anderson', details: 'Grade 2 student fascinated by animals and nature exploration.', grade: 'Grade 2', image: 'image/male.png', age: 7, gender: 'Male', section: 'B' },
        
        { name: 'Jane Smith', details: 'Grade 3 student who enjoys painting and storytelling.', grade: 'Grade 3', image: 'image/female.png', age: 8, gender: 'Female', section: 'A' },
        { name: 'David Wilson', details: 'Grade 3 student interested in dinosaurs and outdoor adventures.', grade: 'Grade 3', image: 'image/male.png', age: 8, gender: 'Male', section: 'B' },
        
        { name: 'John Doe', details: 'Grade 4 student who loves reading and solving puzzles.', grade: 'Grade 4', image: 'image/male.png', age: 9, gender: 'Male', section: 'A' },
        { name: 'Sarah Davis', details: 'Grade 4 student with a talent for music and playing the piano.', grade: 'Grade 4', image: 'image/female.png', age: 9, gender: 'Female', section: 'B' },
        
        { name: 'Emily Johnson', details: 'Grade 5 student passionate about math and science experiments.', grade: 'Grade 5', image: 'image/female.png', age: 10, gender: 'Female', section: 'A' },
        { name: 'Laura Martinez', details: 'Grade 5 student who loves writing short stories and poems.', grade: 'Grade 5', image: 'image/female.png', age: 10, gender: 'Female', section: 'B' },
        
        { name: 'Sophia Martinez', details: 'Grade 6 student who excels in science and loves robotics.', grade: 'Grade 6', image: 'image/female.png', age: 11, gender: 'Female', section: 'A' },
        { name: 'Liam Johnson', details: 'Grade 6 student who enjoys playing basketball and coding.', grade: 'Grade 6', image: 'image/male.png', age: 11, gender: 'Male', section: 'B' },
        { name: 'Mia Brown', details: 'Grade 6 student who is passionate about history and writing essays.', grade: 'Grade 6', image: 'image/female.png', age: 11, gender: 'Female', section: 'A' }
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