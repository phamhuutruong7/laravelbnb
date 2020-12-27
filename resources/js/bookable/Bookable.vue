<template>
    <div class="row">
        <div class="col-md-8 pb-4">
            <div class="card">
                <div class="card-body">
                    <div v-if="!loading">
                        <h2>{{ bookable.title }}</h2>
                        <hr>
                        <article>{{ bookable.description }}</article>
                    </div>
                    <div v-else>Loading...</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <availability></availability>
        </div>
    </div>
</template>

<script>
import Availability from "./Availability";
export default{
    data(){
        return{
            bookable: null
        }
    },
    components:{
        Availability
    },
    created(){
        this.loading = false;
        axios.get(`/api/bookables/${this.$route.params.id}`)
        .then(response => {
            this.bookable = response.data.data;
            this.loading = false;
        });
    }
}
</script>
