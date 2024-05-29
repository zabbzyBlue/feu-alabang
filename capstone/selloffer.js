// Function to handle file uploads and display previews
function handleFileUpload(event, previewId) {
    var previewBox = document.getElementById(previewId);
    var file = event.target.files[0];

    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            previewBox.innerHTML = '<img src="' + e.target.result + '" alt="Image preview" style="max-width: 100%;">';
        };
        reader.readAsDataURL(file);
    } else {
        previewBox.textContent = '';
    } 
}

// Add event listeners for each file input
document.getElementById('upload-right').addEventListener('change', function(event) {
    handleFileUpload(event, 'preview-right');
});

document.getElementById('upload-left').addEventListener('change', function(event) {
    handleFileUpload(event, 'preview-left');
});

document.getElementById('upload-back').addEventListener('change', function(event) {
    handleFileUpload(event, 'preview-back');
});

document.getElementById('upload-top').addEventListener('change', function(event) {
    handleFileUpload(event, 'preview-top');
});

document.getElementById('upload-outsole').addEventListener('change', function(event) {
    handleFileUpload(event, 'preview-outsole');
});

document.getElementById('upload-sizetag').addEventListener('change', function(event) {
    handleFileUpload(event, 'preview-sizetag');
});

document.getElementById('upload-boxlabel').addEventListener('change', function(event) {
    handleFileUpload(event, 'preview-boxlabel');
});


