using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Windowsformprectical
{
    public partial class Form1 : Form
    {

        student studentobject = new student();
        public Form1()
        {
            InitializeComponent();
        }

        private void savebtn_Click(object sender, EventArgs e)
        {

            studentobject.id =Convert.ToInt32 (idbox.Text);
            studentobject.name = namebox.Text;
            studentobject.age = Convert.ToInt32(agebox.Text);
            studentobject.mobile = mobilebox.Text;
            studentobject.save();
        }

        private void updatebtn_Click(object sender, EventArgs e)
        {
            studentobject.id = Convert.ToInt32(idbox.Text);
            studentobject.name = namebox.Text;
            studentobject.age = Convert.ToInt32(agebox.Text);
            studentobject.mobile = mobilebox.Text;
            studentobject.update();
        }
    }
}
