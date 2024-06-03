<div class="w-3/5 h-full mx-auto *:my-4">
    <div class="h-30 grid grid-rows-2 gap-4 w-full">
        <h3 class="uppercase font-mono p-4 border border-2 w-full bg-slate-50">Types</h3>
        <div class="flex justify-end">
            <form action="<?= WEBROOT ?>" method="post" id="form-type" class="w-full flex justify-end items-center">
                <input type="text" id="nomType" name="nomType" class="w-full p-4 outline-none border border-2
                border-gray-200">
                <button type="submit" name="action" value="create" class="w-1/4 bg-gray-200 hover:bg-black
                hover:border-black
    text-white p-4 font-bold border border-2 border-gray-200 ml-6">Ajouter
                </button>
            </form>
        </div>
    </div>

    <table class="w-full max-h-2/3">
        <thead>
        <tr class="*:px-6 *:py-3 *:bg-black *:text-white *:border-b *:border-gray-200">
            <th>Id</th>
            <th>Type</th>
            <th>Action</th>

        </tr>

        </thead>
        <?php foreach ($types as $type): ?>
            <tr class="even:bg-gray-50 *:px-6 *:py-3 *:whitespace-nowrap *:border-b *:border-gray-200">
                <td><?= $type['id'] ?></td>
                <td><?= $type['nomType'] ?></td>
                <td class="w-2/6">
                    <ul class="grid grid-cols-2 gap-3 *:rounded-lg *:bg-black text-white font-bold text-center">
                        <li><a href="<?= WEBROOT ?>?controller=type&action=edit" class="block p-2">Modifier</a></li>
                        <li><a href="<?= WEBROOT ?>?controller=type&action=delete" class="block p-2">Supprimer</a></li>
                    </ul>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="h-24">

    </div>
</div>