<style>
    header a {
        width: 100%;
        display: block;
        border-radius: 4px;
    }
    header li:has(a):hover {
        background-color: gold;
        color: white;
    }

</style>


<header class="w-1/5 h-full border border-2">
    <ul class="*:p-2 *:list-none">
        <li class=""><a href="<?= WEBROOT ?>?controller=article&action=read">Articles</a></li>
        <li class=""><a href="<?= WEBROOT ?>?controller=approvisionnement&action=read">Approvisionnements</a>
        </li>
        <li class="">Paramètres</li>
        <ul class="*:pl-5 *:p-2">
            <li class=""><a href="<?= WEBROOT ?>?controller=type&action=read">Types</a></li>
            <li class=""><a href="<?= WEBROOT ?>?controller=categorie&action=read">Catégories</a></li>
        </ul>
    </ul>
</header>

