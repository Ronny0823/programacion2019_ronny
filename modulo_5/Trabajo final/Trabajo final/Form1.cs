using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Trabajo_final
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void label9_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {

            double calcular;
            var valor1 = Convert.ToDouble(textBox1.Text);
            var valor2 = Convert.ToDouble(textBox2.Text);

            calcular = Math.Sqrt(valor1 * valor1 + valor2 * valor2);

            textBox17.Text = ("Resultado: " + calcular);
         
        }

        private void button2_Click(object sender, EventArgs e)
        {
            double calcularpromedio;
            var nota1 = Convert.ToDouble(textBox3.Text);
            var nota2 = Convert.ToDouble(textBox4.Text);
            var nota3 = Convert.ToDouble(textBox5.Text);
            var nota4 = Convert.ToDouble(textBox6.Text);

            calcularpromedio = (nota1 + nota2 + nota3 + nota4) / 4;

            textBox7.Text = ("Resultado: " + calcularpromedio.ToString()); 

        }

        private void button3_Click(object sender, EventArgs e)
        {
            double calcular;
            var velocidad = Convert.ToDouble(textBox8.Text);
            var horas = Convert.ToDouble(textBox10.Text);

            calcular = (velocidad * horas);
            textBox9.Text = ("Resultado: " + calcular.ToString() + "km");
        }

        private void button4_Click(object sender, EventArgs e)
        {
            double calcular;
            var nacimirnto = Convert.ToDouble(textBox11.Text);
            var edad = Convert.ToDouble(textBox12.Text);

            calcular = (nacimirnto - edad);
            textBox19.Text = ("Resultado: " + calcular.ToString());


        }
    }
}
