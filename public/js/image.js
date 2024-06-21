const dropArea = document.querySelector(".drag-area");
const dragText = document.querySelector("p");
const button = dropArea.querySelector("button");
const input = dropArea.querySelector("input");

button.addEventListener("click", function () {
    input.click();
    // alert("Please select");
});

input.addEventListener("change", function () {
    const file = this.files[0];
    showFile(file);
});
function showFile(file) {
    let fileType = file.type;
    let validImageTypes = ["image/gif", "image/jpeg", "image/png", "image/jpg","image/webp"];
    if (validImageTypes.includes(fileType)) {
        let fileReader = new FileReader();
        fileReader.onload = () => {
            console.log("hehe");
            let fileUrl = fileReader.result;
            let imgTag = `<img src="${fileUrl}" alt="file" width="100%" height="100%" />`;
            dropArea.innerHTML = imgTag;
        };
        fileReader.readAsDataURL(file);
    } else {
        alert("File không hỗ trợ");
        dragText.textContent = "Kéo và thả để tải file";
    }
}
