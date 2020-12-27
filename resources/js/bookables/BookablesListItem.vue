<template>
    <div class="card w-100">
        <div class="card-body">
            <router-link :to="{ name:'bookable', params: { id } }">
                <h5 class="card-title">{{ title }}</h5>
                <p class="card-text">{{ description }}</p>
            </router-link>

        </div>
    </div>
</template>

<script>
export default {
    props: {
        'title': String,
        'description': String,
        'id': Number
    },
}
</script>
