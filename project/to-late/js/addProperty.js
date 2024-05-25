/*document.addEventListener('DOMContentLoaded', () => {
    const addPhotosBtn = document.querySelector('.add-photos-btn');
    const uploadPhoneBtn = document.querySelector('.upload-phone-btn');

    addPhotosBtn.addEventListener('click', () => {
        alert('Add photos button clicked');
    });

    uploadPhoneBtn.addEventListener('click', () => {
        alert('Upload photos from phone button clicked');
    });
});*/

document.addEventListener('DOMContentLoaded', () => {
    const uploadArea = document.getElementById('uploadArea');
    const uploadContent = document.getElementById('uploadContent');
    const fileInput = document.getElementById('fileInput');

    uploadContent.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', handleFiles);

    uploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadArea.classList.add('dragover');
    });

    uploadArea.addEventListener('dragleave', () => {
        uploadArea.classList.remove('dragover');
    });

    uploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
        const files = e.dataTransfer.files;
        handleFiles({ target: { files } });
    });

    function handleFiles(event) {
        const files = event.target.files;
        const count = files.length;
        const maxCount = 10;
        const currentCount = document.querySelectorAll('.upload-box img').length;
        if (currentCount + count > maxCount) {
            alert(`You can only upload a maximum of ${maxCount} photos.`);
            return;
        }

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '50px';
                    img.style.height = '50px';
                    img.style.margin = '5px';
                    document.querySelector('.upload-box').appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        }

        document.querySelector('.upload-area p').innerText = `Photos: ${currentCount + count} / 10 - You can add up to 10 photos.`;
    }
});