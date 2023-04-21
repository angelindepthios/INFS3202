<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron bg-white">
    <div class="row justify-content-center">
        <h1>Hi Learner! Welcome to <?=$Subject ; ?> Forum</h1>
    </div>

    <div class="row ">
        <div class="container-fluid">
            <div class="wrapper">
                <input type="text" name="search" id="search" placeholder="Type to search" autocomplete="chrome-off">
                <!-- <button><i class="fa fa-search"></i></button> -->
                <div class="results">
                    <ul></ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">


    </div>
    <?php foreach($hasil as $r) : ?>
    <div class="card mt-2">
        <div class="card-body">
            <a href="<?php echo base_url(); ?>forum/<?= $r->ForumID?>">
                <p class="h5"><?=$r->Title;?></p>
            </a>
            <p class="text-sm-start"><?= $r->Description;?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>

<script>
let search = <?php 
echo json_encode($hasil);
?>;
let searchable = [];
for (let i = 0; i < search.length; i++) {
    searchable.push(search[i]["Title"]);
}

const searchInput = document.getElementById('search');
const searchWrapper = document.querySelector('.wrapper');
const resultsWrapper = document.querySelector('.results');

searchInput.addEventListener('keyup', () => {
    let results = [];
    let input = searchInput.value;
    if (input.length) {
        results = searchable.filter((item) => {
            return item.toLowerCase().includes(input.toLowerCase());
        });
    }
    renderResults(results);
});

function renderResults(results) {
    if (!results.length) {
        return searchWrapper.classList.remove('show');
    }

    const content = results
        .map((item) => {
            return `<li><a>${item}</a></li>`;
        })
        .join('');

    searchWrapper.classList.add('show');
    resultsWrapper.innerHTML = `<ul>${content}</ul>`;
}
</script>

<?= $this-> endSection(); ?>