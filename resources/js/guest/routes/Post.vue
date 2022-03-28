<template>
  <div>
    <div>
      <router-link :to="{ name:'home'}">To Home</router-link>
    </div>
    <span v-if="post.category != null">Category: {{ post.category.name }}</span>
    <h3>{{ post.posts_title }}</h3>
    <p>{{ post.content }}</p>
    <h5>Tags:</h5>
    <span v-for="(tag, index) in post.tags" :key="index">{{ tag.name }} </span>
  </div>
</template>

<script>
export default {
  name: "Post",
  data() {
    return {
      post: null,
    };
  },
  mounted() {
    axios.get(`/api/posts/${this.$route.params.slug}`).then((response) => {
      this.post = response.data.data[0];
      console.log(response.data.data[0]);
    });
  },
};
</script>

<style>
</style>