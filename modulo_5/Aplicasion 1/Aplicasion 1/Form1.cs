using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Aplicasion_1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Acceder al texto del objeto txtNombre
            var nombre = txtnombre.Text;

            // convertir el texto a numeros
            var edad = Convert.ToInt16 (txtEdad.Text);  

            //Verificar si es mayor o menor de edad
            if (edad >= 18)
            {
                //mayor
                MessageBox.Show("Eres mayor");
            }
            else
            {
                //menor
                MessageBox.Show("Eres menor");
            }

            MessageBox.Show(nombre);
            MessageBox.Show(edad.ToString());
            MessageBox.Show(nombre + "" + edad);



        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
