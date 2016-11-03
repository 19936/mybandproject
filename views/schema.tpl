<div class="newsarticles">
    <div class="berichtenschema">
        <h1 id="schematitel">Wedstrijdschema 2016-2017</h1>
    <div class="pagenation">
        <ul>
            <li><a href="?action=schema&pagenr=1">1</a></li>
            <li><a href="?action=schema&pagenr=2">2</a></li>
            <li><a href="?action=schema&pagenr=3">3</a></li>
            <li><a href="?action=schema&pagenr=4">4</a></li>
        </ul>
    </div>
        <div id="schematable">
        {foreach from=$result item=oneItem}
            <div class="wedstrijd">
            <p class="datum">
                {$oneItem.datum}
            </p>
            <p class="wedstrijdinfo">
                {$oneItem.thuisteam}
                {$oneItem.tijd}
                {$oneItem.uitteam}
            </p>
            </div>
        {/foreach}
    </div>
    <div class="pagenation">
        <ul>
            <li><a href="?action=schema&pagenr=1">1</a></li>
            <li><a href="?action=schema&pagenr=2">2</a></li>
            <li><a href="?action=schema&pagenr=3">3</a></li>
            <li><a href="?action=schema&pagenr=4">4</a></li>
        </ul>
    </div>
</div>
</div>
</main>


