const divComputedArgument = `
    <div>
        <p>Has published books:</p>
        <p v-bind:class="[{Active:isActive}, {Error:isError}]">{{publisedBooksMessage}}</p>
    </div>
`;

export default {
    name: "ComputedArgument",
    template: divComputedArgument,
    data() {
        return {
            author: {
                name: "jhon",
                books: [
                    "vue - 1",
                    "vue - 2",
                    "vue - 3"
                ]
            },
            isActive: true,
            isError: false
        }
    },
    computed: {
        publisedBooksMessage() {
            return this.author.books.length > 1 ? "yes" : "no"
        },
        classObject() {
            return this.author.books.length >= 1 ? this.isActive : this.isError
        }
    }
}