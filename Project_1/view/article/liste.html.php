<div class="w-4/5 h-full mx-auto *:my-4">
    <div class="h-16 flex justify-between items-center">
        <h3 class="uppercase font-mono p-4 border border-2 w-1/2 bg-slate-50">Articles</h3>
        <a href="<?=WEBROOT?>?controller=article&action=add" class="font-mono p-2 border border-2 border-black w-fit
        rounded-lg hover:bg-black hover:text-white text-black">Nouveau</a>
    </div>

    <table class="w-full max-h-3/5">
        <thead>
        <tr class="*:px-6 *:py-3 *:bg-black *:text-white *:border-b *:border-gray-200">
            <th>Libelle</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Type</th>
            <th>Catégorie</th>
            <th>Action</th>
        </tr>

        </thead>
        <?php foreach($articles as $article): ?>
            <tr class="even:bg-gray-50 *:px-6 *:py-3 *:whitespace-nowrap *:border-b *:border-gray-200">
                <td><?=$article['libelle']?></td>
                <td><?=$article['prixAppro']?></td>
                <td><?=$article['qteStock']?></td>
                <td><?=$article['nomCategorie']?></td>
                <td><?=$article['nomType']?></td>
                <td class="">
                    <ul class="grid grid-cols-2 gap-3 *:rounded-lg *:bg-black text-white font-bold text-center *:p-2">
                        <li><a href="<?= WEBROOT ?>?controller=article&action=edit">Modifier</a></li>
                        <li><a href="<?= WEBROOT ?>?controller=article&action=delete">Supprimer</a></li>
                    </ul>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="h-24">

    </div>
</div>
