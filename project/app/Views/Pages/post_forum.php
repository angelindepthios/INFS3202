<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= form_open_multipart(base_url() . 'upload/multiple'); ?>
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            add forum
        </div>
        <ul class="list-group list-group-flush">
            <div class="container m-2">
                <div class="row">
                    <div class="col m-2">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="title"
                                placeholder="enter title">
                            <label for="floatingInput">Title</label>
                        </div>
                    </div>

                    <div class="col m-2">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" name="category">
                                <option value="biology">Biology</option>
                                <option value="physic">Physic</option>
                                <option value="chemistry">Chemistry</option>
                                <option value="math">Math</option>
                                <option value="geography">Geography</option>
                                <option value="sociology">Sociology</option>
                                <option value="economics">Economics</option>
                                <option value="english">English</option>
                            </select>
                            <label for="floatingSelectGrid">Subject Category</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col m-2">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="please type description" id="floatingTextarea2"
                                style="height: 100px" name="desc"></textarea>
                            <label for="floatingTextarea2">Description</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col m-2 container-fluid">
                        <div class="container-fluid" id="outer">
                            <div class="droparea">
                                <div id="inner">
                                    <input type="file" name="userfile[]" id="upload-button 1" multiple />
                                    <label for="upload-button">Click Or Drag and drop file</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row grid m-3">
                    <div class=" col-9">
                        <div class="row">
                            <div class="col" id="upload">
                                <!-- <button type="button" class="btn btn-light" id ="upd" onclick = "uploadButton()">Light</button> -->
                            </div>
                            <div class="col" id="result">
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </div>

            </div>
    </div>
    </ul>
</div>
</div>
</form>
<script>
// const droparea = document.querySelector(".droparea");

// droparea.addEventListener("dragover", (e) => {
//     e.preventDefault();
//     droparea.classList.add("active-area");
// });

// droparea.addEventListener("dragleave", () => {
//     droparea.classList.remove("active-area");
// });

// droparea.addEventListener("drop", (e) => {
//     e.preventDefault();
//     droparea.remove("active-area");
//     const image = e.dataTransfer.files;
//     const out = document.getElementById("outer");
//     Array.from(image).forEach((img) => {
//         out.innerHTML += "<h6>" + img.name + "</h6>";
//     });
//   if (
//     type == "image/png" ||
//     type == "image/jpg" ||
//     type == "image/jpeg"
//   ) {
//     return upload(image);
//   } else {
//     droparea.setAttribute("class", "droparea invalid");
//     droparea.innerText = "Invalid File Format!";
//     return false;
//   }
//});

// const upload = (image) => {
//   droparea.setAttribute("class", "droparea valid");
//   droparea.innerText = "Added " + image.name;
// };
</script>
<?= $this-> endSection(); ?>