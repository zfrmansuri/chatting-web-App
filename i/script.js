let selectedFile = null;

function handleFileSelect(event) {
  selectedFile = event.target.files[0];
}

function sendFile() {
  if (selectedFile) {
    const reader = new FileReader();
    reader.onload = function(event) {
      const fileData = event.target.result;
      
      // Send the file data to the server or perform other operations
      const chatArea = document.getElementById('chat-area');
      chatArea.innerHTML += 'File sent: ' + selectedFile.name + '<br>';
      
      // Clear the selected file
      selectedFile = null;
    };
    reader.readAsDataURL(selectedFile);
  }
}
