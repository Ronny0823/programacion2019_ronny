using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace moviminto
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
            var keyValue = e.KeyValue;

           

            var posicionX = label1.Location.X;
            var posicionY = label1.Location.Y;

           // MessageBox.Show(posicionX.ToString());
           // MessageBox.Show(posicionY.ToString());

           

            if (keyValue == 37)
            {
                label1.Location = new System.Drawing.Point(posicionX - 5, posicionY);
                label3.Text = label1.Location.ToString();
                //MessageBox.Show("izquierda");
            }


            if(keyValue == 39)
            {
                label1.Location = new System.Drawing.Point(posicionX + 5, posicionY);
                label1.Location = new System.Drawing.Point(posicionX , posicionY -5);
                label3.Text = label1.Location.ToString();
                //MessageBox.Show("derecha");
            }
            if(keyValue == 38)
            {
                label1.Location = new System.Drawing.Point(posicionX , posicionY - 5);
                label3.Text = label1.Location.ToString();
                //MessageBox.Show("arriba");
            }
            if(keyValue == 40)
            {
                label1.Location = new System.Drawing.Point(posicionX, posicionY + 5);
                label3.Text = label1.Location.ToString();
                //MessageBox.Show("abajo");
            }

    
        }

        private void Form1_KeyPress(object sender, KeyPressEventArgs e)
        {

        }

        private void Form1_KeyUp(object sender, KeyEventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }
    }
}
