<template>
    <div>
        <div v-for="category in categories" :key="category.id">
            {{ category.name }}
        </div>
    </div>
</template>

<script>
export default {
    props: ["initialCategories"],
    data() {
        return { categories: _.cloneDeep(this.initialCategories) };
    }
};
</script>

<style lang="scss" scoped></style>
