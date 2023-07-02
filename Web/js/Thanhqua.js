window.addEventListener('DOMContentLoaded', () => {
    const chart = document.querySelector('.chart');
    const redBar = document.querySelector('.red');
    const greenBar = document.querySelector('.green');
    const yellowBar = document.querySelector('.yellow');
  
    // Số câu hỏi ở mức độ nghi nhớ
    const redQuestionCount = 5;
    const greenQuestionCount = 10;
    const yellowQuestionCount = 7;
  
    // Cập nhật chiều cao của các cột
    redBar.style.height = `${(redQuestionCount / (redQuestionCount + greenQuestionCount + yellowQuestionCount)) * 100}%`;
    greenBar.style.height = `${(greenQuestionCount / (redQuestionCount + greenQuestionCount + yellowQuestionCount)) * 100}%`;
    yellowBar.style.height = `${(yellowQuestionCount / (redQuestionCount + greenQuestionCount + yellowQuestionCount)) * 100}%`;
  });
  