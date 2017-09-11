<toolbar>
    <section class="mdc-toolbar__section mdc-toolbar__section--align-start" slot="left">
        <button class="material-icons mdc-toolbar__icon--menu" @click="$refs.drawer.open()">menu</button>
        <span class="mdc-toolbar__title">
            @section('title')
                Laravel Totem
            @show
        </span>
    </section>
    <section class="mdc-toolbar__section mdc-toolbar__section--align-end" slot="right">
        @section('toolbar-icons')
        @show
    </section>
</toolbar>