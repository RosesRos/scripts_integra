import ArgumentComponent from "./Argument.js";
import ComputedArgument from "./ComputedArgument.js";

const Count = `
    <div>
        <button class="bg-slate-400	p-4 shadow-md" @click="incrementCount">{{btn}} {{count}}</button>
        <Argument-Component v-bind:Ptext="Ptext"></Argument-Component>
        <ComputedArgument></ComputedArgument>
    </div>
`;

export default {
    name: "CountComponent",
    template: Count,
    props: {
        button: String
    },
    data() {
        return {
            count: 0,
            btn: this.button,
            Ptext: "test coco button"
        }
    },
    methods: {
        incrementCount() {
            this.count++;
        }
    },
    mounted() {
        this.count = 2
    },
    components: {
        ArgumentComponent,
        ComputedArgument
    }
};