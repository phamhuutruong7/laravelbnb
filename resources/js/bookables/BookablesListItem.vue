<template>
    <div>
        <h1>{{ itemTitle }}</h1>
        <p>{{ itemContent }}</p>

    </div>
</template>

<script>
export default {
    props: {
        'item-title': String,
        'item-content': String,
        'price': Number
    },
    mounted(){
        console.log(this.itemTitle);
    }
}
</script>
