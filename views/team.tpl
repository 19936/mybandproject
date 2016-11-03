<div class="newsarticles">
    <div class="berichtenteam">
        <h1 id="schematitel">Selectie 2016-2017</h1>
        <div class="pagenation">
            <ul>
                <li id="page1" onclick=""><a href="?action=team&pagenr=1">1</a></li>
                <li id="page2"><a href="?action=team&pagenr=2">2</a></li>
                <li id="page3"><a href="?action=team&pagenr=3">3</a></li>
                <li id="page4"><a href="?action=team&pagenr=4">4</a></li>
            </ul>
        </div>
        <div id="teamtable">
        {foreach from=$result item=oneItem}
            <div class="speler">
            <p class="spelerhead">
                {$oneItem.title}<br>
                <img src=images/{$oneItem.image}><br>
                {$oneItem.positie}
            </p>
            <p class="spelerinfo">
                {$oneItem.content}
            </p>
            </div>
        {/foreach}
    </div>
    <div class="pagenation">
            <ul>
                <li><a href="?action=team&pagenr=1">1</a></li>
                <li><a href="?action=team&pagenr=2">2</a></li>
                <li><a href="?action=team&pagenr=3">3</a></li>
                <li><a href="?action=team&pagenr=4">4</a></li>
            </ul>
        </div>
</div>
</div>
</main>