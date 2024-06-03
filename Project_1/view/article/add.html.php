<style>
    form input {
        border: 2px solid #e5e7eb;
        width: 100%;
        outline: none !important;
        padding: .5rem;
    }

    form label {
        display: block;
        margin: .5rem 0;
    }

    form select {
        width: 100%;
        padding: .5rem;
    }
</style>

<form action="<?= WEBROOT ?>" method="post" id="form-article" class="w-1/2 mx-auto shadow-md">

    <div class="flex justify-center items-center w-full bg-black text-white p-4">

        <h3 class="uppercase font-bold">Formulaire</h3>

    </div>

    <div class="p-5">

        <div class="">

            <label for="libelle" class="">Libelle</label>

            <input type="text" id="libelle" name="libelle">

        </div>

        <div class="grid grid-cols-2 gap-5">
            <div class="">
                <label for="prix" class="">Prix</label>
                <input type="number" id="prix" name="prixAppro">
            </div>
            <div class="">
                <label for="qteStock" class="">Quantité</label>
                <input type="number" id="qteStock" name="qteStock">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-5">

            <div class="">

                <label for="type_id" class="">Type</label>

                <select name="type_id" id="type_id">

                    <option value="">...</option>

                    <?php foreach ($types as $type) : ?>

                        <option value="<?=$type['id']?>"><?=$type['nomType']?></option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="">

                <label for="categorie_id" class="">Categorie</label>

                <select name="categorie_id" id="categorie_id">

                    <option value="">...</option>

                    <?php foreach ($categories as $categorie) : ?>

                        <option value="<?=$categorie['id']?>"><?=$categorie['nomCategorie']?></option>

                    <?php endforeach; ?>
                </select>
            </div>

        </div>
        <div class="flex justify-end">
            <input type="hidden" name="controller" value="article">

            <button type="submit" name="action" value="create" class="py-2 w-1/4 hover:bg-black
    hover:text-white bg-white border border-2 border-black mt-4">Ajouter
            </button>

        </div>
    </div>
</form>

