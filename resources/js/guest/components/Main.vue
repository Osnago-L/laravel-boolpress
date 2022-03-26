<template>
    <div class="main_top_margin">
            <div class="cards" v-for="(post, index) in posts" :key="index">
                <span v-if="post.category != null">Category: {{post.category.name}}</span>
                <h3>{{ post.posts_title }}</h3>
                <p>{{ post.content }}</p>
                <h5>Tags:</h5>
                <span v-for="(tag, index) in post.tags" :key="index">{{tag.name}} </span>
            </div>
    </div>
</template>

<script>
export default {
    name: "Main",
    data() {
        return {
            posts: []
        };
    },
    mounted() {
        axios.get("/api/posts").then((response) => {
            this.posts = response.data.data;
        });
    },
    methods:{

    }
};
</script>

<style scoped>
.cards{
    border: 1px solid black;
    height: 200px;
    padding: 15px 20px;
    margin-bottom: 30px;
}
</style>
