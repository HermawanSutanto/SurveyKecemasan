/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            spacing: {
                "sticky-start": "20px 30px 0px 30px", // Margin awal
                "sticky-end": "0", // Margin saat sticky
                "sticky-padding": "1rem", // Padding saat sticky
            },
            boxShadow: {
                sticky: "0 4px 6px rgba(0, 0, 0, 0.1)", // Bayangan saat sticky
            },
            borderRadius: {
                navbar: "4rem", // Rounded awal navbar
            },
            colors: {
                customBg: "#E5D0CC",
                buttonCL: "#F5E8DA",
                coklat: "#DEC7C6", // Perbaiki format warna dengan '#'
                coklat_muda: "#F4E7DA", // Perbaiki format warna dengan '#'
                // Warna kustom lainnya
            },
        },
    },
    plugins: [],
};
