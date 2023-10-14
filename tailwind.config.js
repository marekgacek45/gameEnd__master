import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            colors: {
                primaryColor: "#313866",
                primaryColor: "#4a007d", //nowy ciemny fiolet
                primaryColor: "#512173", //nowy ciemny fiolet

                primaryColor: "#b131fa", //nowy jasny fiolet
                primaryColor: "#6f39c3", //nowy jasny fiolet najlepszy

                primaryColor: "#ff1cc0", //nowy rozowy action
                primaryColor: "#df6fcc", //nowy rozowy action troche ciemniejszy
                primaryColor: "#BE58CF", //nowy rozowy action troche ciemniejszy
                primaryColor: "#b933d4", //nowy rozowy action troche ciemniejszy

                primaryColor: "#6f39c3", //nowy jasny fiolet najlepszy

                //paleta cała od ciemnego do turkusu bardzo ładna
                primaryColor: "#504099", //fiolet ciemny mozna znalezc jakis lepszy
                primaryColor: "#7500D7", //fiolet
                primaryColor: "#8F00FE", //fiolet
                primaryColor: "#AC00FF", //fiolet
                // różowy action i jest petarda

                primaryColor: {
                    200: "#b131fa",
                    300: "#6f39c3", //nowy jasny fiolet najlepszy
                    400: "#7500D7", //fiolet
                    500:'#4a007d',
                    600:'#512173',
                    700:'#313866',
                },
                actionColor: {
                    300:'#ff1cc0',
                    400: "#FE7BE5",
                    500:'#df6fcc',
                    600:'#BE58CF',
                    700:'#b933d4',
                },

                //    primaryColor: '#2b0b24',

                secondaryColor: "#504099",
                //    actionColor:{
                //     100:'#FE7BE5',
                //     200:'#974EC3',
                //     300:'#6d388c'
                //    },
                paleViolet: "#353863",
                darkBlue: "#202141",
            },

            fontFamily: {
                main: ["IBM Plex Sans", "sans-serif"],
                content: ["Newsreader", "serif"],
                siteTitle: ["Young Serif", "serif"],
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
