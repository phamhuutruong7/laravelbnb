<template>
    <div>
        <bookable-list-item item-title="Cheap Villa" item-content="A very cheap villa" :price="1000"></bookable-list-item>
        <bookable-list-item item-title="Cheap Villa 2" item-content="A very cheap villa 2" :price="1500"></bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookablesListItem"
export default {
    components: {
        BookableListItem
    }
}
</script>
