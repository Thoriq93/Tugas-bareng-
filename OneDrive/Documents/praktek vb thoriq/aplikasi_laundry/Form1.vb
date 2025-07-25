Imports System.Windows.Forms.VisualStyles.VisualStyleElement
Imports MySql.Data

Public Class Form1
    Private Sub FOutlet_Load(sender As Object, e As EventArgs) Handles MyBase.Load

        Call tampiloutlet()
        Call aturDGV()
    End Sub

    Sub tampiloutlet()

        Call Sambung()
        DA = New MySql.Data.MySqlClient.MySqlDataAdapter("select * from tb_outlet", CONN)
        DS = New DataSet
        DA.Fill(DS, "tb_outlet")
        dg_outlet.DataSource = DS.Tables("tb_outlet")





    End Sub


    Sub aturDGV()
        Try
            dg_outlet.Columns(0).Width = 130
            dg_outlet.Columns(1).Width = 130
            dg_outlet.Columns(2).Width = 130
            dg_outlet.Columns(3).Width = 150
            dg_outlet.Columns(0).HeaderText = "ID_USER"
            dg_outlet.Columns(1).HeaderText = "NAMA"
            dg_outlet.Columns(2).HeaderText = "ALAMAT"
            dg_outlet.Columns(3).HeaderText = "TELEPON"
        Catch ex As Exception

        End Try
    End Sub
    Private Sub TextBox1_TextChanged(sender As Object, e As EventArgs) Handles txtid.TextChanged

    End Sub


    Private Sub Hapus_Click(sender As Object, e As EventArgs) Handles Hapus.Click
        Call Hapusout()
        Call tampiloutlet()
        Call aturDGV()
    End Sub
    Sub Hapusout()
        Try
            Call Sambung()
            Dim str As String
            str = "DELETE FROM tb_outlet WHERE id_oulet = '" & txtid.Text & "'"
            CMD = New MySql.Data.MySqlClient.MySqlCommand(str, CONN)
            CMD.ExecuteNonQuery()
            MessageBox.Show("Data Pelanggan Berhasil Dihapus.")
        Catch ex As Exception
            MessageBox.Show("Data Pelanggan Gagal Dihapus.")
        End Try
    End Sub



    Private Sub BtnSimpan_Click(sender As Object, e As EventArgs) Handles BtnSimpan.Click
        Call Sambung()
        Try
            Dim str As String
            str = "insert into tb_outlet values ('" & txtid.Text & "','" & txtnama.Text & "', '" & txtalmt.Text & "', '" & txttlp.Text & "')"
            CMD = New MySql.Data.MySqlClient.MySqlCommand(str, CONN)
            CMD.ExecuteNonQuery()
            MessageBox.Show("Insert Data Barang Berhasil Dilakukan")
        Catch ex As Exception
            MessageBox.Show("Insert data barang gagal dilakukan.")
        End Try
        Call tampiloutlet()
        Call aturDGV()

    End Sub

    Private Sub Btnkeluar_Click(sender As Object, e As EventArgs) Handles BtnKeluar.Click
        Application.Exit()

    End Sub


    Private Sub dg_outlet_CellMouseClick(sender As Object, e As DataGridViewCellMouseEventArgs) Handles dg_outlet.CellMouseClick
        txtid.Text = dg_outlet.Rows(e.RowIndex).Cells(0).Value
        txtnama.Text = dg_outlet.Rows(e.RowIndex).Cells(1).Value
        txtalmt.Text = dg_outlet.Rows(e.RowIndex).Cells(2).Value
        txttlp.Text = dg_outlet.Rows(e.RowIndex).Cells(3).Value
    End Sub

    Private Sub BtnEdit_Click(sender As Object, e As EventArgs) Handles BtnEdit.Click
        Try
            Call Sambung()
            Dim query As String = "UPDATE tb_outlet SET nama = @nama, alamat = @alamat, tlp = @telepon WHERE id_oulet = @id"
            Dim cmd As New MySqlClient.MySqlCommand(query, CONN)

            cmd.Parameters.AddWithValue("@nama", txtnama.Text)
            cmd.Parameters.AddWithValue("@alamat", txtalmt.Text)
            cmd.Parameters.AddWithValue("@telepon", txttlp.Text)
            cmd.Parameters.AddWithValue("@id", txtid.Text)

            cmd.ExecuteNonQuery()
            MessageBox.Show("Data berhasil diupdate!", "Info", MessageBoxButtons.OK, MessageBoxIcon.Information)
            Call tampiloutlet()
        Catch ex As Exception
            MessageBox.Show("Error saat update: " & ex.Message)
        End Try
    End Sub

    Private Sub DataGridView2_CellContentClick(sender As Object, e As DataGridViewCellEventArgs) Handles dg_outlet.CellContentClick

    End Sub

    Private Sub TextBox1_TextChanged_1(sender As Object, e As EventArgs) Handles txtid.TextChanged

    End Sub
End Class