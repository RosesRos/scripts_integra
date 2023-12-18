const Argument = `
    <p>{{textP}}</p>
`;

export default {
    name: "ArgumentComponent",
    template: Argument,
    props: {
        Ptext: String
    },
    data() {
        return {
            textP: this.Ptext
        }
    }
};