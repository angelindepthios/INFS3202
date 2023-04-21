<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php foreach($detail as $d) : ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <?= $d->Title; ?> - on <?= $d ->DateCreated; ?>
        </div>
        <div class="card-body">
            <small>Category : <?= $d->Category ;?></small>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p><?= $d->Description; ?></p>
                <footer class="blockquote-footer"><?= $d->CreatedBy; ?> <cite title="Source Title"></cite>
                </footer>
            </blockquote>
        </div>
        <div class="card-footer">
            <button id="rate_btn">Berikan Rating</button>
        </div>
        <div id="rateModal" class="modal-rate">
            <div class="modal-contents">
                <?= form_open_multipart(base_url() . 'rate'); ?>
                <input type="hidden" id="version" name="forumID" value=<?= $d->ForumID ; ?> />
                <input type = "hidden" id="ratings" name="ratings" />
                <div>
                    <span class="fa fa-star " id="1" onClick="rate(1)"></span>
                    <span class="fa fa-star " id="2" onClick="rate(2)"></span>
                    <span class="fa fa-star " id="3" onClick="rate(3)"></span>
                    <span class="fa fa-star " id="4" onClick="rate(4)"></span>
                    <span class="fa fa-star " id="5" onClick="rate(5)"></span>
                </div>
                <input type="submit" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
    <script>
    var btn = document.getElementById("rate_btn");
    var modal = document.getElementById("rateModal");
    btn.onclick = function() {
        modal.style.display = "block";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    function rate(id){
        document.getElementsByName("ratings")[0].value = id;
        if(id ==1){
            document.getElementById(1).classList.add("checked");
            document.getElementById(2).classList.remove("checked");
            document.getElementById(3).classList.remove("checked");
            document.getElementById(4).classList.remove("checked");
            document.getElementById(5).classList.remove("checked");
         }
        else if(id == 2){
            document.getElementById(1).classList.add("checked");
            document.getElementById(2).classList.add("checked");
            document.getElementById(3).classList.remove("checked");
            document.getElementById(4).classList.remove("checked");
            document.getElementById(5).classList.remove("checked");
        }
        else if(id==3){
            document.getElementById(1).classList.add("checked");
            document.getElementById(2).classList.add("checked");
            document.getElementById(3).classList.add("checked");
            document.getElementById(4).classList.remove("checked");
            document.getElementById(5).classList.remove("checked");
        }
        else if(id==4){
            document.getElementById(1).classList.add("checked");
            document.getElementById(2).classList.add("checked");
            document.getElementById(3).classList.add("checked");
            document.getElementById(4).classList.add("checked");
            document.getElementById(5).classList.remove("checked");
        }
        else if(id==5){
            document.getElementById(1).classList.add("checked");
            document.getElementById(2).classList.add("checked");
            document.getElementById(3).classList.add("checked");
            document.getElementById(4).classList.add("checked");
            document.getElementById(5).classList.add("checked");
        }
    }
    </script>
    <?php endforeach; ?>

    <?= $this-> endSection(); ?>