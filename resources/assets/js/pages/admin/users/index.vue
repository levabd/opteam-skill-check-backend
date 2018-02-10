<template>


        <div class="row">
            <div class="col-lg-12 col">
                <child/>
            </div>
        </div>

</template>

<script>
  export default {
    layout: 'admin',

    middleware: 'auth',
  }
</script>