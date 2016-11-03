
<div class="newsarticles">
    <div class="berichten">
    <h1 id="tablenewsh1">Niewsberichten</h1>
    <div class="pagenation">
    <ul>
        <li><a href="?action=main&pagenr=1">1</a></li>
        <li><a href="?action=main&pagenr=2">2</a></li>
        <li><a href="?action=main&pagenr=3">3</a></li>
        <li><a href=#>4</a></li>
    </ul>
    </div>
    <hr>
    {foreach from=$result item=oneItem}
        <div class="tablenews"> 
        <div class="tablenews2"> 
        <article>
            <h1>{$oneItem.title}</h1>
            <img src=images/{$oneItem.image}><br>
            <p>{$oneItem.content}</p>
            <p>{$oneItem.datum}</p>
        </article>
        </div>
        </div>
        <hr>
    {/foreach}
        <div class="pagenation">
    <ul>
        <li><a href="?action=main&pagenr=1">1</a></li>
        <li><a href="?action=main&pagenr=2">2</a></li>
        <li><a href="?action=main&pagenr=3">3</a></li>
        <li><a href="#">4</a></li>
    </ul>
    </div>
</div>
</div>
</main>




